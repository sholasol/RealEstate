<?php

namespace App\Http\Controllers\backend;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyTypeController extends Controller
{
    public  function propertyType()
    {
        $types = PropertyType::latest()->get();
        return view('property.types', ['types' => $types]);
    }

    public function createType()
    {
        return view('property.create_type');
    }

    public function createPropertyType(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'lowercase'],
        ]);

        $ptype = new PropertyType();

        $ptype->type_name = $request->name;
        $ptype->type_icon = $request->icon;

        $ptype->save();

        $notificaion = array(
            'message' => 'Property type created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notificaion);
    }
}
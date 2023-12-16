<?php

namespace App\Http\Controllers\backend;

use App\Models\Amenities;
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

        $ptype->type_name = trim($request->name);
        $ptype->type_icon = trim($request->icon);

        $ptype->save();

        $notificaion = array(
            'message' => 'Property type created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notificaion);
    }

    public function editType($id)
    {
        $type = PropertyType::find($id);

        return view('property.edit_property', ['type' => $type]);
    }

    public function updatePropertyType(Request $request)
    {



        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'lowercase'],
        ]);

        $id = $request->id;

        $type = PropertyType::findOrFail($id);

        $type->type_name = trim($request->name);
        $type->type_icon = trim($request->icon);

        $type->save();

        $notificaion = array(
            'message' => 'Property type updated successfully',
            'alert-type' => 'success'
        );

        return redirect('/admin/property_type')->with($notificaion);
    }

    public function deleteType($id)
    {
        $type = PropertyType::findOrFail($id);
        $type->delete();

        $notificaion = array(
            'message' => 'Property type deleted successfully',
            'alert-type' => 'error'
        );

        return redirect('/admin/property_type')->with($notificaion);
    }

    public function allAmenity()
    {
        $amenitiies = Amenities::latest()->get();
        return view('amenity.all', ['amenities' => $amenitiies]);
    }
}

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
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function singleProperty($id)
    {
        $property = Property::findOrFail($id);
        //dd($property->gallery());
        return view('property.single')->with('property',$property);
    }
}

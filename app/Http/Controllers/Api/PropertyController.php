<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertiesRequest;
use App\Http\Resources\PropertiesResource;
use App\Models\Certificate;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // - Returns properties «
    public function index()
    {
        $properties = Property::all();
        return PropertiesResource::collection($properties);
    }

    // - Creates a new property «
    public function store(PropertiesRequest $request)
    {
        $properties = Property::create($request->all());

        return response()->json([
            "success" => true,
            "message" => "Property stored successfully.",
            "data" => $properties
        ]);
    }

    // - Returns a property «
    public function show(Property $property)
    {
        if (is_null($property)) {
            return $this->sendError('Property not found.');
        }

        return response()->json([
            "success" => true,
            "message" => "Property retrieved successfully.",
            "data" => $property
        ]);
    }
    
    // - Updates a property «
    public function update(Request $request, Property $property)
    {
        $property->update($request->all());
        return $property;
    }

    // - Deletes a property «
    public function destroy(Property $property)
    {
        $property->delete();
    
        return response()->json([
            "success" => true,
            "message" => "Property deleted successfully.",
            "data" => $property
        ]);
    }

    // - Returns the certificates of a property «
    public function certificateOfAProperty($id){
        $certificates = Certificate::where('property_id', $id)->get();

        return response()->json([
            "success" => true,
            "message" => "Certificates of this property",
            "data" => $certificates
        ]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CertificatesRequest;
use App\Http\Resources\CertificatesResource;
use App\Models\Certificate;
use App\Models\Property;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    // - Returns certificates «
    public function index()
    {
        $certificates = Certificate::all();
        return CertificatesResource::collection($certificates);
    }

    // - Creates a certificate «
    public function store(CertificatesRequest $request)
    {
        $certificate = Certificate::create($request->all());

        return response()->json([
            "success" => true,
            "message" => "Certificate stored successfully.",
            "data" => $certificate
        ]);
    }

    // - Returns a certificate «
    public function show(Certificate $certificate)
    {
        if(is_null($certificate)){
            return response()->json([
                "message" => "Certificate not found.",
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Certificate retrieved successfully.",
            "data" => $certificate
        ]);
    }

    
    public function update(Request $request, Certificate $certificate)
    {
        $certificate->update($request->all());

        return response()->json([
            "success" => true,
            "message" => "Certificate updated successfully.",
            "data" => $certificate
        ]);
    }

    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
    
        return response()->json([
            "success" => true,
            "message" => "Certificate deleted successfully.",
            "data" => $certificate
        ]);
    }

    // 2.2 - Write a eloquent query to get properties which has more than 5 certificates
    public function propertiesHasMoreThanFiveCertificate()
    {
        $properties = Property::withCount('certificates')
                        ->having('certificates_count', '>', 5)
                        ->get();

        return response()->json([
            "success" => true,
            "message" => "Showing properties which has more than 5 certificates.",
            "data" => $properties
        ]);
    }

    // 2.1 Write a MySQL raw query to get properties which has more than 5 certificates
    // SELECT * FROM `certificates` c INNER JOIN `properties` p ON c.property_id = p.id GROUP BY property_id Having COUNT(*) > 5; 

}

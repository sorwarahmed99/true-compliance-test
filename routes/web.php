<?php

use App\Http\Controllers\PropertiesController;
use App\Models\Certificates;
use App\Models\Properties;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('property/{id}/certificate', function ($id) {
    $properties = Properties::where('id', $id)->with('certificate')->get();
    // dd($certificates);
    $certificates = Certificates::where('property_id', $id)->get();

    return view('welcome', compact('certificates'));
});

// GET /property/{id}/certificate      - Returns the certificates of a property


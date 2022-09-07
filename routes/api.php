<?php

use App\Http\Controllers\Api\CertificateController;
use App\Http\Controllers\Api\NoteController;
use App\Http\Controllers\Api\PropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('property', PropertyController::class);

Route::get('property/{id}/certificate',[PropertyController::class, 'certificateOfAProperty']);

Route::get('property/{id}/note',[NoteController::class, 'noteOfAProperty']);
Route::post('property/{id}/note',[NoteController::class, 'storeNoteForProperty']);

Route::resource('certificate', CertificateController::class);

Route::get('certificate/{id}/note',[NoteController::class, 'noteOfACertificate']);
Route::post('certificate/{id}/note',[NoteController::class, 'storeNoteForCertificate']);

Route::get('property-certificate/',[CertificateController::class, 'propertiesHasMoreThanFiveCertificate']);

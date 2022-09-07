<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // - Returns the Note of a property
    public function noteOfAProperty($id){
        $note = Note::where('model_id', $id)->where('model_type', 'Property')->get();
        
        return response()->json([
            "success" => true,
            "message" => "Note showing for the property",
            "data" => $note
        ]);
    }

    //  - Creates a note for a property
    public function storeNoteForProperty(Request $request, $id) {
        $note = Note::create([
            'model_type' => 'Property',
            'model_id' => $id,
            'note' => $request->note,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Note created",
            "data" => $note
        ]);
    }

    // - Returns the Note of a Certificate
    public function noteOfACertificate($id){
        $note = Note::where('model_id', $id)->where('model_type', 'Certificate')->get();

        return response()->json([
            "success" => true,
            "message" => "Note showing for the Certificate.",
            "data" => $note
        ]);
    }

    // - Creates a note for a certificate
    public function storeNoteForCertificate(Request $request, $id){
        $note = Note::create([
            'model_type' => 'Certificate',
            'model_id' => $id,
            'note' => $request->note,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Note created",
            "data" => $note
        ]);
    }
}

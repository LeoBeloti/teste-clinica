<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
class MedicoController extends Controller
{
    public function createMedico(Request $request)
    {
        $medico = new Medico;  
        $medico->nome = $request->nome;
        $medico->email = $request->email;
        $medico->crm = $request->crm;
        // dd($medico);      
        $medico->save();
    
        return response()->json([
            "message" => "medico record created"
        ], 201);
    }
}

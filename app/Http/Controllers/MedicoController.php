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

    public function edit(Request $request, $id)
    {
        
    }
}
/*
Um empresário proprietário dono de uma clínica médica está em busca de uma solução informatiza para agendamento procedimentos de pacientes com os médicos que atuam no espaço. Um levantamento de requisitos apresentou os seguintes recursos que devem estar presentes no sistema: 
* O sistema deve ser capaz de manipular dados dos médicos que atuam na clínica 
* O sistema deve ser capaz de armazenar e manipular dados dos pacientes que freqüentam a clínica. 
* O sistema deve ser capaz de armazenar e manipular dados dos procedimentos/consultas que os médicos realizam na clínica. 
* O sistema deve ser capaz de armazenar e manipular dados de agendamento de consulta/ procedimento 
O empresário gostaria que o sistema fosse desenvolvido para a web a fim de facilitar seu acesso. 
*/
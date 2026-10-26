<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScriptController extends Controller
{
    //  

    public function show($id)
    {

        $claves = [
            // ESPECIALIDADES
            ["codigo_materia" => "ESP-AGRO", "codigo_examen" => "8471"],
            ["codigo_materia" => "ESP-ANIM", "codigo_examen" => "7195"],
            ["codigo_materia" => "ESP-AUTO", "codigo_examen" => "7368"],
            ["codigo_materia" => "ESP-BIOT", "codigo_examen" => "3912"],
            ["codigo_materia" => "ESP-ELECME", "codigo_examen" => "9780"],
            ["codigo_materia" => "ESP-ELECTR", "codigo_examen" => "3072"],
            ["codigo_materia" => "ESP-GAMBI", "codigo_examen" => "8785"],
            ["codigo_materia" => "ESP-ININD", "codigo_examen" => "9920"],
            ["codigo_materia" => "ESP-MIND", "codigo_examen" => "6322"],
            ["codigo_materia" => "ESP-MECA", "codigo_examen" => "5801"],
            ["codigo_materia" => "ESP-PGA", "codigo_examen" => "1607"],
            ["codigo_materia" => "ESP-PIND", "codigo_examen" => "7089"],
            ["codigo_materia" => "ESP-PA", "codigo_examen" => "4394"],
            ["codigo_materia" => "PFIII-PROG", "codigo_examen" => "9374"],
            ["codigo_materia" => "ESP-QIND", "codigo_examen" => "1039"],
            ["codigo_materia" => "ESP-SPA", "codigo_examen" => "4814"],

            // 1ER SEMESTRE TECNOLÓGICO Y GENERAL
            ["codigo_materia" => "I-PMAT", "codigo_examen" => "2493"],
            ["codigo_materia" => "I-LYC", "codigo_examen" => "2401"],
            ["codigo_materia" => "I-CNET", "codigo_examen" => "8915"],
            ["codigo_materia" => "I-CSOC", "codigo_examen" => "6163"],
            ["codigo_materia" => "I-CDIG", "codigo_examen" => "4211"],
            ["codigo_materia" => "I-PFIH", "codigo_examen" => "3784"],

            // 3ER SEMESTRE TECNOLÓGICO
            ["codigo_materia" => "III-LCOM", "codigo_examen" => "7677"],
            ["codigo_materia" => "III-PMAT", "codigo_examen" => "1446"],
            ["codigo_materia" => "III-CNET", "codigo_examen" => "4213"],
            ["codigo_materia" => "III-PIFH", "codigo_examen" => "2306"],

            // 3ER SEMESTRE GENERAL
            ["codigo_materia" => "III-LYC-G", "codigo_examen" => "6418"],
            ["codigo_materia" => "III-PMAT-G", "codigo_examen" => "2697"],
            ["codigo_materia" => "III-ECO", "codigo_examen" => "9233"],
            ["codigo_materia" => "III-TC", "codigo_examen" => "6738"],
            ["codigo_materia" => "III-HUM", "codigo_examen" => "2053"],
            ["codigo_materia" => "III-GAT", "codigo_examen" => "2391"],
            ["codigo_materia" => "III-HC", "codigo_examen" => "8276"],

            // 5TO SEMESTRE GENERAL - TECNOLÓGICO
            ["codigo_materia" => "V-TSM", "codigo_examen" => "1086"],
            ["codigo_materia" => "V-CHIS", "codigo_examen" => "2682"],
            ["codigo_materia" => "V-EPVI", "codigo_examen" => "8894"],
            ["codigo_materia" => "V-PROG", "codigo_examen" => "4185"],
            ["codigo_materia" => "V-SI", "codigo_examen" => "3091"],

            // 5TO SEMESTRE PROPEDÉUTICO
            ["codigo_materia" => "V-FA", "codigo_examen" => "9521"],
            ["codigo_materia" => "V-REE", "codigo_examen" => "2550"],
            ["codigo_materia" => "V-AA", "codigo_examen" => "8154"],
            ["codigo_materia" => "V-APM", "codigo_examen" => "4952"],
            ["codigo_materia" => "V-CHCT", "codigo_examen" => "4382"],
            ["codigo_materia" => "V-DT", "codigo_examen" => "4755"],
            ["codigo_materia" => "V-IHN", "codigo_examen" => "6705"],
            ["codigo_materia" => "V-MEO", "codigo_examen" => "8538"],
            ["codigo_materia" => "V-MEF", "codigo_examen" => "8063"],
            ["codigo_materia" => "V-EPS", "codigo_examen" => "7939"],
            ["codigo_materia" => "V-HSP", "codigo_examen" => "9003"],

            // 5TO SEMESTRE ESPECIALIDAD SyMEC
            ["codigo_materia" => "V-SYMEC 1", "codigo_examen" => "7160"],
            ["codigo_materia" => "V-SYMEC 2", "codigo_examen" => "7244"],

            // 5TO SEMESTRE ESPECIALIDAD PROGRAMACIÓN
            ["codigo_materia" => "V-PROG-M4S1", "codigo_examen" => "5086"],
            ["codigo_materia" => "V-PROG-M4S2", "codigo_examen" => "6217"],
        ];  


        $contenido = view("script", [
            "claves" => $claves,
        ])->render();

        return response($contenido)
            ->header('Content-Type', 'application/javascript; charset=UTF-8');
    }
}

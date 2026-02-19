<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        return view('pacientes.index', ['pacientes' => collect([])]);
    }

    public function show($id)
    {
        return view('pacientes.detalle', ['paciente' => null]);
    }
}

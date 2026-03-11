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
        return view('pacientes.detalle');
    }

    public function odontograma($id)
    {
        return view('pacientes.odontograma');
    }

    public function planTratamiento($id)
    {
        return view('pacientes.plan-tratamiento');
    }

    public function notas($id)
    {
        return view('pacientes.notas');
    }

    public function edit($id)
    {
        return view('pacientes.editar');
    }
}

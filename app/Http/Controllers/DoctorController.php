<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctores.index', ['doctores' => collect([])]);
    }

    public function show($id)
    {
        return view('doctores.detalle', ['doctor' => null]);
    }
}

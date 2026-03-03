<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permisos = Permission::orderBy('name')->get();
        return view('permisos.index', compact('permisos'));
    }

    public function create()
    {
        return view('permisos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255','unique:permissions,name'],
            'label' => ['nullable','string','max:255'],
        ]);

        Permission::create($data);

        return redirect()->route('permisos.index')->with('success', 'Permiso creado.');
    }

    public function edit(Permission $permiso)
    {
        return view('permisos.edit', compact('permiso'));
    }

    public function update(Request $request, Permission $permiso)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255','unique:permissions,name,'.$permiso->id],
            'label' => ['nullable','string','max:255'],
        ]);

        $permiso->update($data);

        return redirect()->route('permisos.index')->with('success', 'Permiso actualizado.');
    }

    public function destroy(Permission $permiso)
    {
        $permiso->delete();
        return redirect()->route('permisos.index')->with('success', 'Permiso eliminado.');
    }
}
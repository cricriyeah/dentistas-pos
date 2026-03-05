@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between align-items-center">
                <h3 class="box-title">Pacientes</h3>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>

            <div class="box-body">

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Lista de Pacientes</h4>

                            <div class="box-controls pull-right">
                                <div class="lookup lookup-circle lookup-right">
                                    <input id="pacienteSearch" type="text" placeholder="Buscar..." autocomplete="off">
                                </div>
                            </div>

                        </div>

                        <div class="box-body no-padding">
                            <div class="table-responsive">

                                <table class="table table-hover mb-0" id="pacientesTable">

                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Edad</th>
                                            <th>Genero</th>
                                            <th>Fecha Nacimiento</th>
                                            <th>Celular</th>
                                            <th class="text-end" style="width:140px;">Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>
                                                <a href="#">
                                                    Juan Pérez
                                                </a>
                                            </td>

                                            <td>34</td>

                                            <td>Masculino</td>

                                            <td>
                                                <span class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    12/05/1990
                                                </span>
                                            </td>

                                            <td>6241234567</td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end align-items-center gap-3">

                                                    <a href="#"
                                                       class="text-info fs-5"
                                                       title="Ver">
                                                        <i class="si si-eye"></i>
                                                    </a>

                                                    <a href="#"
                                                       class="text-primary fs-5"
                                                       title="Editar">
                                                        <i class="si si-pencil"></i>
                                                    </a>

                                                    <a href="#"
                                                       class="text-danger fs-5"
                                                       title="Eliminar">
                                                        <i class="si si-trash"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><a href="#">María López</a></td>
                                            <td>29</td>
                                            <td>Femenino</td>

                                            <td>
                                                <span class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    21/11/1994
                                                </span>
                                            </td>

                                            <td>6249876543</td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end align-items-center gap-3">

                                                    <a href="#" class="text-info fs-5">
                                                        <i class="si si-eye"></i>
                                                    </a>

                                                    <a href="#" class="text-primary fs-5">
                                                        <i class="si si-pencil"></i>
                                                    </a>

                                                    <a href="#" class="text-danger fs-5">
                                                        <i class="si si-trash"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><a href="#">Carlos Mendoza</a></td>
                                            <td>42</td>
                                            <td>Masculino</td>

                                            <td>
                                                <span class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    02/03/1982
                                                </span>
                                            </td>

                                            <td>6245558899</td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end align-items-center gap-3">

                                                    <a href="#" class="text-info fs-5">
                                                        <i class="si si-eye"></i>
                                                    </a>

                                                    <a href="#" class="text-primary fs-5">
                                                        <i class="si si-pencil"></i>
                                                    </a>

                                                    <a href="#" class="text-danger fs-5">
                                                        <i class="si si-trash"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>


                                    </tbody>

                                </table>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

  const input = document.getElementById('pacienteSearch');
  const table = document.getElementById('pacientesTable');

  if (!input || !table) return;

  input.addEventListener('input', function () {

    const q = (input.value || '').toLowerCase().trim();
    const rows = table.querySelectorAll('tbody tr');

    rows.forEach(row => {

      const text = row.innerText.toLowerCase();
      row.style.display = text.includes(q) ? '' : 'none';

    });

  });

});
</script>
@endpush
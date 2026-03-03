@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between align-items-center">
                <h3 class="box-title">Roles</h3>
                <a href="{{ route('roles.create') }}" class="btn btn-primary">Agregar</a>
            </div>

            <div class="box-body">
                @if(session('success'))
                    <div class="alert alert-success mb-3">{{ session('success') }}</div>
                @endif

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Lista de Roles</h4>
                            <div class="box-controls pull-right">
                                <div class="lookup lookup-circle lookup-right">
                                    <input id="roleSearch" type="text" placeholder="Buscar..." autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="box-body no-padding">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="rolesTable">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Etiqueta</th>
                                            <th># Permisos</th>
                                            <th>Creado</th>
                                            <th class="text-end" style="width:140px;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($roles as $r)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('roles.edit', $r) }}">
                                                        {{ $r->name }}
                                                    </a>
                                                </td>
                                                <td>{{ $r->label ?? '—' }}</td>
                                                <td>{{ $r->permissions_count }}</td>
                                                <td>
                                                    <span class="text-muted">
                                                        <i class="fa fa-clock-o"></i>
                                                        {{ optional($r->created_at)->format('d/m/Y') }}
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="d-flex justify-content-end align-items-center gap-3">

                                                        {{-- (Opcional) Ver detalle: si luego haces roles.show --}}
                                                        {{-- <a href="{{ route('roles.show', $r) }}" class="text-info fs-5" title="Ver">
                                                            <i class="si si-eye"></i>
                                                        </a> --}}

                                                        {{-- Editar --}}
                                                        <a href="{{ route('roles.edit', $r) }}"
                                                           class="text-primary fs-5"
                                                           title="Editar">
                                                            <i class="si si-pencil"></i>
                                                        </a>

                                                        {{-- Eliminar --}}
                                                        <form action="{{ route('roles.destroy', $r) }}"
                                                              method="POST"
                                                              class="d-inline"
                                                              onsubmit="return confirm('¿Eliminar este rol?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    class="border-0 bg-transparent text-danger fs-5 p-0"
                                                                    title="Eliminar">
                                                                <i class="si si-trash"></i>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center py-4">No hay roles registrados.</td>
                                            </tr>
                                        @endforelse
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
  const input = document.getElementById('roleSearch');
  const table = document.getElementById('rolesTable');
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
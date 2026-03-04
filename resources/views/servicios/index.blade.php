@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between align-items-center">
                <h3 class="box-title">Servicios</h3>
                <a href="{{ route('servicios.create') }}" class="btn btn-primary">Agregar</a>
            </div>

            <div class="box-body">
                @if(session('success'))
                    <div class="alert alert-success mb-3">{{ session('success') }}</div>
                @endif

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Lista de Servicios</h4>
                            <div class="box-controls pull-right">
                                <div class="lookup lookup-circle lookup-right">
                                    <input id="servicioSearch" type="text" placeholder="Buscar..." autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="box-body no-padding">
                            <div class="table-responsive no-shadow-services">
                                <table class="table table-hover mb-0" id="serviciosTable">
                                    <thead>
                                        <tr>
                                            <th>Orden</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Activo</th>
                                            <th>Creado</th>
                                            <th class="text-end mr-3" style="width:140px;">Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse($servicios as $s)
                                            <tr>
                                                <td>{{ $s->orden }}</td>

                                                <td>
                                                    <a href="{{ route('servicios.edit', $s) }}">
                                                        {{ $s->nombre }}
                                                    </a>
                                                </td>

                                                <td>{{ $s->precio !== null ? '$'.number_format($s->precio, 2) : '—' }}</td>

                                                <td>
                                                    @if($s->activo)
                                                        <span class="badge bg-success">Sí</span>
                                                    @else
                                                        <span class="badge bg-secondary">No</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <span class="text-muted">
                                                        <i class="fa fa-clock-o"></i>
                                                        {{ optional($s->created_at)->format('d/m/Y') }}
                                                    </span>
                                                </td>

                                                <td class="text-end">
                                                    <div class="d-flex justify-content-end align-items-center gap-3">

                                                        {{-- Ver detalle --}}
                                                        <a href="{{ route('servicios.show', $s) }}"
                                                           class="text-info fs-7"
                                                           title="Ver detalle">
                                                            <i class="si si-eye"></i>
                                                        </a>

                                                        {{-- Editar --}}
                                                        <a href="{{ route('servicios.edit', $s) }}"
                                                           class="text-primary fs-8"
                                                           title="Editar">
                                                            <i class="si si-pencil"></i>
                                                        </a>

                                                        {{-- Eliminar --}}
                                                        <form action="{{ route('servicios.destroy', $s) }}"
                                                              method="POST"
                                                              class="d-inline"
                                                              onsubmit="return confirm('¿Eliminar este servicio?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    class="border-0 bg-transparent text-danger fs-8 p-0"
                                                                    title="Eliminar">
                                                                <i class="si si-trash"></i>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center py-4">No hay servicios registrados.</td>
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
<style>
    .no-shadow-services,
    .no-shadow-services table {
    box-shadow: none !important;
    filter: none !important;
    }
    .no-shadow-services::before,
    .no-shadow-services::after {
    box-shadow: none !important;
    filter: none !important;
    }
</style>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
  const input = document.getElementById('servicioSearch');
  const table = document.getElementById('serviciosTable');
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

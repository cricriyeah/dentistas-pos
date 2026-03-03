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

                <div class="table-responsive">
                    <table id="serviciosTable" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Orden</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Activo</th>
                                <th class="text-end" style="width:140px;">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($servicios as $s)
                                <tr>
                                    <td>{{ $s->orden }}</td>
                                    <td>{{ $s->nombre }}</td>
                                    <td>{{ $s->precio !== null ? '$'.number_format($s->precio, 2) : '—' }}</td>
                                    <td>
                                        @if($s->activo)
                                            <span class="badge bg-success">Sí</span>
                                        @else
                                            <span class="badge bg-secondary">No</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end align-items-center gap-2">

                                            {{-- Ver detalle --}}
                                            <a href="{{ route('servicios.show', $s) }}"
                                            class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"
                                            title="Ver detalle">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            {{-- Editar --}}
                                            <a href="{{ route('servicios.edit', $s) }}"
                                            class="waves-effect waves-circle btn btn-circle btn-warning btn-xs me-5"
                                            title="Editar">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            {{-- Eliminar --}}
                                            <form action="{{ route('servicios.destroy', $s) }}"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('¿Eliminar este servicio?');">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="waves-effect waves-circle btn btn-circle btn-danger btn-xs me-5"
                                                        title="Eliminar">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No hay servicios registrados.</td>
                                </tr>
                            @endforelse
                        </tbody>

                        <tfoot>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
  if (window.$ && $.fn.DataTable) {
    $('#serviciosTable').DataTable({
      responsive: true,
      order: [[0, 'asc']]
    });
  }
});
</script>
@endpush
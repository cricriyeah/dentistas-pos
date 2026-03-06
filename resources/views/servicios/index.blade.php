@extends('layouts.app')

@section('title', 'Dashboard')

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
                <div class="box-body">
                    @if(session('success'))
                        <div class="alert alert-success mb-3">{{ session('success') }}</div>
                    @endif

                    <div class="row">
                    @forelse($servicios as $s)
                        <div class="col-xl-4 col-lg-6 col-12 mb-4">
                            <div class="service-card box">

                                <div class="service-card-body">

                                    <div class="service-header d-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="service-name">
                                            {{ $s->nombre }}
                                            </h4>

                                            @if($s->descripcion)
                                            <p class="service-desc">
                                            {{ Str::limit($s->descripcion, 90) }}
                                            </p>
                                            @endif
                                        </div>

                                        @if($s->activo)
                                        <span class="badge bg-success">Activo</span>
                                        @else
                                        <span class="badge bg-secondary">Inactivo</span>
                                        @endif
                                    </div>
                                    <div class="service-price mt-3">
                                        <span class="price-label">Precio</span>
                                        <h3 class="price-value">
                                        {{ $s->precio !== null ? '$'.number_format($s->precio,2) : '—' }}
                                        </h3>
                                    </div>
                                    <div class="service-footer d-flex justify-content-between align-items-center mt-3">

                                        <span class="text-muted small">
                                            <i class="fa fa-clock-o"></i>
                                            {{ optional($s->created_at)->format('d/m/Y') }}
                                        </span>

                                        <div class="service-actions">

                                            <a href="{{ route('servicios.show', $s) }}"
                                                class="text-info me-3"
                                                title="Ver">
                                                <i class="si si-eye"></i>
                                            </a>

                                            <a href="{{ route('servicios.edit', $s) }}"
                                                class="text-primary me-3"
                                                title="Editar">
                                                <i class="si si-pencil"></i>
                                            </a>

                                            <form action="{{ route('servicios.destroy',$s) }}"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('¿Eliminar este servicio?');">

                                                @csrf
                                                @method('DELETE')

                                                <button class="border-0 bg-transparent text-danger">
                                                    <i class="si si-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 text-center py-5">
                            <h5>No hay servicios registrados</h5>
                        </div>
                    @endforelse
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

<style>

.service-card{
border-radius:12px;
transition:.25s;
box-shadow:0 6px 16px rgba(0,0,0,.08);
}

.service-card:hover{
transform:translateY(-4px);
box-shadow:0 10px 25px rgba(0,0,0,.15);
}

.service-card-body{
padding:20px;
}

.service-name{
font-weight:600;
margin-bottom:4px;
}

.service-desc{
font-size:13px;
color:#6c757d;
margin-bottom:0;
}

.service-price{
border-top:1px solid #eee;
padding-top:12px;
}

.price-label{
font-size:12px;
color:#999;
}

.price-value{
font-weight:600;
margin:0;
}

.service-footer{
border-top:1px solid #eee;
padding-top:12px;
}

.service-actions i{
font-size:16px;
cursor:pointer;
}

</style>

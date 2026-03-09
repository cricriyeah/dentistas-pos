@extends('layouts.app')

@section('title', 'Servicios')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/servicios.css') }}">
@endsection

@section('content')
<div class="services-page">

    <div class="services-header">
        <div>
            <h1 class="services-title">Servicios</h1>
            <p class="services-subtitle">Administra los servicios disponibles de la clínica</p>
        </div>

        <a href="{{ route('servicios.create') }}" class="btn-ui btn-ui-primary">
            Agregar servicio
        </a>
    </div>

    @if(session('success'))
        <div class="alert-ui alert-ui-success">
            {{ session('success') }}
        </div>
    @endif

    @if($servicios->count())
        <div class="services-grid">
            @foreach($servicios as $s)
                <div class="service-col">
                    <div class="service-card">
                        <div class="service-card-top">
                            <div class="service-main">
                                <h3 class="service-name">{{ $s->nombre }}</h3>

                                @if($s->descripcion)
                                    <p class="service-desc">
                                        {{ Str::limit($s->descripcion, 90) }}
                                    </p>
                                @endif
                            </div>

                            @if($s->activo)
                                <span class="badge-ui badge-ui-success">Activo</span>
                            @else
                                <span class="badge-ui badge-ui-danger">Inactivo</span>
                            @endif
                        </div>

                        <div class="service-price-block">
                            <span class="service-price-label">Precio</span>
                            <div class="service-price-value">
                                {{ $s->precio !== null ? '$' . number_format($s->precio, 2) : '—' }}
                            </div>
                        </div>

                        <div class="service-card-footer">
                            <span class="service-date">
                                <i class="fa fa-clock-o"></i>
                                {{ optional($s->created_at)->format('d/m/Y') }}
                            </span>

                            <div class="service-actions">
                                <a
                                    href="{{ route('servicios.show', $s) }}"
                                    class="action-btn action-btn-info"
                                    title="Ver"
                                >
                                    <i class="si si-eye"></i>
                                </a>

                                <a
                                    href="{{ route('servicios.edit', $s) }}"
                                    class="action-btn action-btn-primary"
                                    title="Editar"
                                >
                                    <i class="si si-pencil"></i>
                                </a>

                                <form
                                    action="{{ route('servicios.destroy', $s) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('¿Eliminar este servicio?');"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="action-btn action-btn-danger" title="Eliminar">
                                        <i class="si si-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-state">
            <h3>No hay servicios registrados</h3>
            <p>Agrega tu primer servicio para comenzar.</p>
        </div>
    @endif

</div>
@endsection
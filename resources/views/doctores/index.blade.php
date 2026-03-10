@extends('layouts.app')

@section('title', 'Doctores')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/doctores.css') }}">
@endsection

@section('content')
<div class="doctors-page">

    <div class="doctors-header">
        <div>
            <h1 class="doctors-title">Doctores</h1>
            <p class="doctors-subtitle">Consulta y administra el personal médico de la clínica</p>
        </div>

        <a href="#" class="btn-ui btn-ui-primary">
            Agregar doctor
        </a>
    </div>

    <div class="doctors-grid">

        <div class="doctor-col">
            <a href="#" class="doctor-card-link">
                <div class="doctor-card">

                    <div class="doctor-card-top"></div>

                    <div class="doctor-avatar-wrap">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Dr. Juan Pérez" class="doctor-avatar">
                    </div>

                    <div class="doctor-card-body">
                        <h3 class="doctor-name">Dr. Juan Pérez</h3>
                        <p class="doctor-specialty">Ortodoncia</p>

                        <div class="doctor-info-list">
                            <div class="doctor-info-item">
                                <span class="doctor-info-icon"><i class="fa fa-envelope"></i></span>
                                <span>juan@clinica.com</span>
                            </div>

                            <div class="doctor-info-item">
                                <span class="doctor-info-icon"><i class="fa fa-phone"></i></span>
                                <span>624 123 4567</span>
                            </div>

                            <div class="doctor-info-item">
                                <span class="doctor-info-icon"><i class="fa fa-clock-o"></i></span>
                                <span>Lun - Vie 9:00 - 17:00</span>
                            </div>
                        </div>

                        <div class="doctor-card-actions">
                            <span class="badge-ui badge-ui-success">Activo</span>

                            <div class="table-actions">
                                <span class="action-btn action-btn-info">
                                    <i class="si si-eye"></i>
                                </span>
                                <span class="action-btn action-btn-primary">
                                    <i class="si si-pencil"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </a>
        </div>

        <div class="doctor-col">
            <a href="#" class="doctor-card-link">
                <div class="doctor-card">

                    <div class="doctor-card-top"></div>

                    <div class="doctor-avatar-wrap">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Dra. María López" class="doctor-avatar">
                    </div>

                    <div class="doctor-card-body">
                        <h3 class="doctor-name">Dra. María López</h3>
                        <p class="doctor-specialty">Odontología General</p>

                        <div class="doctor-info-list">
                            <div class="doctor-info-item">
                                <span class="doctor-info-icon"><i class="fa fa-envelope"></i></span>
                                <span>maria@clinica.com</span>
                            </div>

                            <div class="doctor-info-item">
                                <span class="doctor-info-icon"><i class="fa fa-phone"></i></span>
                                <span>624 555 9876</span>
                            </div>

                            <div class="doctor-info-item">
                                <span class="doctor-info-icon"><i class="fa fa-clock-o"></i></span>
                                <span>Lun - Sab 10:00 - 18:00</span>
                            </div>
                        </div>

                        <div class="doctor-card-actions">
                            <span class="badge-ui badge-ui-success">Activo</span>

                            <div class="table-actions">
                                <span class="action-btn action-btn-info">
                                    <i class="si si-eye"></i>
                                </span>
                                <span class="action-btn action-btn-primary">
                                    <i class="si si-pencil"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </a>
        </div>

    </div>

</div>
@endsection
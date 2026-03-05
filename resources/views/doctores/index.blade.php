@extends('layouts.app')

@section('content')

<div class="container">

<div class="d-flex justify-content-between align-items-center mb-30">
    <h3 class="box-title">Doctores</h3>

    <a href="#" class="btn btn-primary">
        Agregar Doctor
    </a>
</div>


<div class="row">


{{-- DOCTOR CARD --}}
<div class="col-xl-3 col-lg-4 col-md-6 col-12">

<a href="#" class="doctor-card-link">

<div class="doctor-card">

    <div class="doctor-header"></div>

    <div class="doctor-photo">
        <img src="https://randomuser.me/api/portraits/men/32.jpg">
    </div>

    <div class="doctor-body">

        <h4 class="doctor-name">
            Dr. Juan Pérez
        </h4>

        <p class="doctor-specialty">
            Ortodoncia
        </p>


        <div class="doctor-info">

            <p>
                <i class="fa fa-envelope"></i>
                juan@clinica.com
            </p>

            <p>
                <i class="fa fa-phone"></i>
                624 123 4567
            </p>

            <p>
                <i class="fa fa-clock-o"></i>
                Lun - Vie 9:00 - 17:00
            </p>

        </div>

    </div>

</div>

</a>

</div>



{{-- DOCTOR CARD --}}
<div class="col-xl-3 col-lg-4 col-md-6 col-12">

<a href="#" class="doctor-card-link">

<div class="doctor-card">

    <div class="doctor-header"></div>

    <div class="doctor-photo">
        <img src="https://randomuser.me/api/portraits/women/44.jpg">
    </div>

    <div class="doctor-body">

        <h4 class="doctor-name">
            Dra. María López
        </h4>

        <p class="doctor-specialty">
            Odontología General
        </p>

        <div class="doctor-info">

            <p>
                <i class="fa fa-envelope"></i>
                maria@clinica.com
            </p>

            <p>
                <i class="fa fa-phone"></i>
                624 555 9876
            </p>

            <p>
                <i class="fa fa-clock-o"></i>
                Lun - Sab 10:00 - 18:00
            </p>

        </div>

    </div>

</div>

</a>

</div>



</div>
</div>

@endsection

<style>

.doctor-card-link{
    text-decoration:none;
    color:inherit;
}

.doctor-card{

    background:white;
    border-radius:12px;
    overflow:hidden;
    text-align:center;

    transition:.25s;

    box-shadow:0 6px 18px rgba(0,0,0,.08);

}

.doctor-card:hover{

    transform:translateY(-6px);

    box-shadow:0 10px 30px rgba(0,0,0,.15);

}


/* HEADER COLOR */

.doctor-header{

    height:85px;

    background:linear-gradient(135deg,#11c5a3,#0fa88c);

}


/* FOTO */

.doctor-photo{

    margin-top:-50px;

}

.doctor-photo img{

    width:100px;
    height:100px;

    border-radius:50%;

    border:5px solid white;

    object-fit:cover;

}


/* BODY */

.doctor-body{

    padding:20px;

}


.doctor-name{

    margin-top:10px;
    font-weight:600;

    color:#2b3d4f;

}


.doctor-specialty{

    color:#11c5a3;

    font-weight:500;

    margin-bottom:15px;

}


/* INFO */

.doctor-info{

    text-align:left;

    font-size:13px;

}


.doctor-info p{

    margin-bottom:6px;

}


.doctor-info i{

    width:18px;

    color:#11c5a3;

}

</style>
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-xxxl-9 col-xl-8 col-12">
            <div class="mb-20 d-flex justify-content-between align-items-center">
                <h1 class="my-md-0 mb-10">Johen doe</h1>
                <button type="button" class="waves-effect waves-light btn btn-primary"><i class="mdi mdi-plus me-15"></i>Add
                    Record</button>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="box bg-primary">
                        <div class="box-body">
                            <div class="mb-15 d-flex justify-content-between align-items-center">
                                <h4 class="my-0">Heart Rate</h4>
                                <i class="fs-18 mdi mdi-heart-outline"></i>
                            </div>
                            <div>
                                <h5 class="fw-400 my-0">75/118</h5>
                            </div>
                        </div>
                        <div class="box-body pt-0 ps-0">
                            <div id="heartrate"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="mb-15 d-flex justify-content-between align-items-center">
                                <h4 class="my-0">Fever</h4>
                                <i class="text-primary fs-18 mdi mdi-heart-outline"></i>
                            </div>
                            <div>
                                <h5 class="fw-400 my-0">100.8<small>&deg;F</small></h5>
                            </div>
                        </div>
                        <div class="box-body pt-0 ps-0">
                            <div id="fever"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="mb-15 d-flex justify-content-between align-items-center">
                                <h4 class="my-0">Blood Pre..</h4>
                                <i class="text-primary fs-18 mdi mdi-heart-pulse"></i>
                            </div>
                            <div class="mb-10 d-flex justify-content-between align-items-center">
                                <h4 class="fw-400 my-0">75</h4>
                                <p class="my-0">Upper</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-400 my-0">124</h4>
                                <p class="my-0">Lower</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <div class="mb-5 pb-1 d-flex justify-content-between align-items-center">
                                <h4 class="my-0">Bill Due</h4>
                                <i class="text-primary fs-18 mdi mdi-wallet"></i>
                            </div>
                            <div>
                                <h5 class="fw-300 my-0">$214.86</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="box overflow-hidden">
                        <div class="box-body">
                            <div>
                                <h4 class="mt-0 mb-5">Fever History</h4>
                                <select class="form-select no-border ps-0 w-auto">
                                    <option>1 to 10 Jan '21</option>
                                    <option>11 to 31 Jan 21</option>
                                    <option>1 to 15 Feb '21</option>
                                    <option>16 to 18 Feb '21</option>
                                </select>
                            </div>
                            <div class="mt-10 text-center d-flex align-items-center justify-content-between">
                                <div class="d-flex justify-content-center align-items-start">
                                    <h5 class="text-danger fs-24 fw-600 my-0">99</h5><small
                                        class="fs-14 text-danger fw-600 my-0">+12%</small>
                                </div>
                                <p class="mb-0 text-center">Yesterday</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="box">
                        <div class="box-body">
                            <div class="text-center d-flex align-items-center justify-content-between">
                                <i class="text-primary fs-24 fa fa-user-md"></i>
                                <div class="fw-600 fs-18">Johen Mark</div>
                            </div>
                            <div class="text-fade text-end fs-16 pb-1">My Doctor</div>
                        </div>
                    </a>
                </div>
                <div class="col-xxxl-8 col-xl-7 col-12">
                    <div class="box">
                        <div class="box-header no-border pb-0">
                            <h4 class="box-title">Heart ECG</h4>
                        </div>
                        <div class="box-body pt-5 pb-0">
                            <div class="mb-15 d-flex justify-content-between align-items-center">
                                <select class="form-select no-border ps-0 w-auto">
                                    <option>1 to 10 Jan 2021</option>
                                    <option>11 to 31 Jan 2021</option>
                                    <option>1 to 15 Feb 2021</option>
                                    <option>16 to 18 Feb 2021</option>
                                </select>
                                <div class="bg-lightest p-10 rounded10">
                                    <p class="mb-0">
                                        <span class="text-primary pe-10">72 bmp</span>Average
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box-body py-0">
                            <canvas id="ecg" class="h-250 w-p100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xxxl-4 col-xl-5 col-12">
                    <div class="box">
                        <div class="box-body px-0 bb-1 text-center">
                            <div class="avatar avatar-lg status-success">
                                <img src="{{ asset('assets/images/avatar/avatar-13.png') }}"
                                    class="rounded-circle bg-primary" alt="" />
                            </div>
                            <h4 class="mt-20 mb-15">Dr. Poul doe</h4>
                            <p class="mb-0">Heart Specialist</p>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-6 be-1">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/health-1-color.png') }}"
                                            class="img-fluid me-10 w-50" alt="">
                                        <div>
                                            <h3 class="mb-0">10</h3>
                                            <p class="mb-2 text-muted">Operation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/health-2-color.png') }}"
                                            class="img-fluid me-10 w-50" alt="">
                                        <div>
                                            <h3 class="mb-0">47</h3>
                                            <p class="mb-2 text-muted">Patients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <button type="button" class="waves-effect waves-light d-block w-p100 btn btn-primary-light"><i
                                    class="me-15 mdi mdi-comment-outline"></i>Message</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Current Vitals</h4>
                            <div class="box-controls pull-right">
                                <div class="lookup lookup-circle lookup-right">
                                    <input type="text" name="s" placeholder="Patients id">
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="flexbox bb-1 mb-15">
                                <div>
                                    <p><span class="text-mute">Patient Name:</span> <strong>Jonsahn</strong></p>
                                </div>
                                <div>
                                    <p><span class="text-mute">Patient Id:</span> <strong>1254896</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row bb-1 pb-10">
                                        <div class="col-4">
                                            <img class="img-fluid float-start w-30 mt-10 me-10"
                                                src="{{ asset('assets/images/weight.png') }}" alt="">
                                            <div>
                                                <p class="mb-0"><small>Weight</small></p>
                                                <h5 class="mb-0"><span>230 ibs</span></h5>
                                            </div>
                                        </div>
                                        <div class="col-4 bs-1 be-1">
                                            <img class="img-fluid float-start w-30 mt-10 me-10"
                                                src="{{ asset('assets/images/human.png') }}" alt="">
                                            <div>
                                                <p class="mb-0"><small>Height</small></p>
                                                <h5 class=" mb-0"><span>6’1</span></h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid float-start w-30 mt-10 me-10"
                                                src="{{ asset('assets/images/bmi.png') }}" alt="">
                                            <div>
                                                <p class="mb-0"><small>BMI</small></p>
                                                <h5 class="mb-0"><span>30.34</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body pt-0">
                            <p><small>Recorded on 25/05/2020</small></p>
                        </div>
                        <div class="box-body bg-primary">
                            <img src="{{ asset('assets/images/smoking.png') }}" alt="" class="float-start me-10">
                            <p>Smoking Status : current every day smoker</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="box">
                        <div class="box-body">
                            <img src="{{ asset('assets/images/glucose-meter.svg') }}" class="w-50 h-50 mb-5" alt="" />
                            <div class="fs-18 mt-5">Glucose Level</div>
                            <div class="fw-400 text-primary fs-22 pb-1">85-95</div>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <div class="box-body">
                            <img src="{{ asset('assets/images/petri-dish.svg') }}" class="w-50 h-50 mb-5" alt="" />
                            <div class="fs-18 mt-5">Blood Count</div>
                            <div class="fw-400 text-primary fs-22 pb-1">9.456/ml</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxxl-3 col-xl-4 col-12">
            <a class="box box-body mb-5" href="#">
                <div class="d-flex align-items-center">
                    <img class="me-15 avatar avatar-lg bg-primary-light rounded-circle"
                        src="{{ asset('assets/images/avatar/avatar-2.png') }}" alt="...">
                    <div class="text-start">
                        <h2 class="text-primary mb-0 fs-26">Dr. Kevin Black</h2>
                        <h4>Cardiologists</h4>
                    </div>
                </div>
            </a>
            <div class="box b-0 bg-transparent no-shadow">
                <div class="box-body pb-0 px-0">
                    <h4 class="mb-0">Scheeduled Appointments</h4>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <span class="badge badge-success-light">Routine Checkup</span>
                    <h4 class="mt-20 mb-10">Meculam Deo - Standard Consult</h4>
                    <div class="d-flex bb-1 mb-15 pb-15">
                        <p class="mb-0 text-mute me-20">09:15am - 10:45am</p>
                        <p class="mb-0 text-mute"><i class="fa fa-clock-o me-5"></i> <span class="text-primary">Starts in 15
                                m</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img class="me-15 avatar avatar-lg bg-primary-light rounded-circle"
                                src="{{ asset('assets/images/avatar/avatar-3.png') }}" alt="...">
                            <div class="text-start">
                                <h4 class="text-primary mb-0">Dr. Meculam</h4>
                                <small>+1 142 536 7890</small>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-xl badge-dot badge-primary me-15"></span>Billed
                        </div>
                    </div>
                </div>
                <div class="box-footer text-end">
                    <button type="button" class="waves-effect waves-light btn-sm btn btn-secondary"><i
                            class="mdi mdi-pencil me-15"></i>Edit Consult</button>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <span class="badge badge-danger-light">Emegency</span>
                    <h4 class="mt-15 mb-10">Maical Deo - Primium Consult</h4>
                    <div class="d-flex bb-1 mb-5 pb-15">
                        <p class="mb-0 text-mute me-20">09:15am - 10:45am</p>
                        <p class="mb-0 text-mute"><i class="fa fa-clock-o me-5"></i> <span class="text-primary">Starts in 15
                                m</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img class="me-15 avatar avatar-lg bg-primary-light rounded-circle"
                                src="{{ asset('assets/images/avatar/avatar-4.png') }}" alt="...">
                            <div class="text-start">
                                <h4 class="text-primary mb-0">Dr. Maical Deo</h4>
                                <small>+1 421 563 7458</small>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-xl badge-dot badge-dark me-15"></span>Bulk Billed
                        </div>
                    </div>
                </div>
                <div class="box-footer text-end">
                    <button type="button" class="waves-effect waves-light btn-sm btn btn-secondary"><i
                            class="mdi mdi-pencil me-15"></i>Edit Consult</button>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <span class="badge badge-info-light">Emegency</span>
                    <h4 class="mt-15 mb-10">Jilmil Deo - Neuro Consult</h4>
                    <div class="d-flex bb-1 mb-10 pb-20">
                        <p class="mb-0 text-mute me-20">09:15am - 10:45am</p>
                        <p class="mb-0 text-mute"><i class="fa fa-clock-o me-5"></i> <span class="text-primary">Starts in 15
                                m</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img class="me-15 avatar avatar-lg bg-primary-light rounded-circle"
                                src="{{ asset('assets/images/avatar/avatar-9.png') }}" alt="...">
                            <div class="text-start">
                                <h4 class="text-primary mb-0">Dr. Maical Deo</h4>
                                <small>+1 125 412 0215</small>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-xl badge-dot badge-dark me-15"></span>Bulk Billed
                        </div>
                    </div>
                </div>
                <div class="box-footer text-end">
                    <button type="button" class="waves-effect waves-light btn-sm btn btn-secondary"><i
                            class="mdi mdi-pencil me-15"></i>Edit Consult</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
@endsection
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-md-flex align-items-center text-md-start text-center">
								<div class="me-md-30">
									<img src="../images/svg-icon/color-svg/custom-21.svg" alt="" class="w-150" />
								</div>
								<div class="d-lg-flex w-p100 align-items-center justify-content-between">
									<div class="me-lg-10 mb-lg-0 mb-10">
										<h3 class="mb-0">Today - 20% Discount on Lung Examinations</h3>
										<p class="mb-0 fs-16">The Package price includes: consultoin of a pulmonolgist, spirogrphy, cardiogram</p>									
									</div>
									<div>
										<a href="#" class="waves-effect waves-light btn btn-primary text-nowrap">Know More</a>								
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-20.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Total Patients</h4>
											<h3 class="mb-0">1245</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-18.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Total Staffs</h4>
											<h3 class="mb-0">145</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="../images/svg-icon/color-svg/custom-19.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Total Surgery</h4>
											<h3 class="mb-0">245</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
						  <div class="box">
							<div class="box-header with-border">
							  <h4 class="box-title">Admitted Patient</h4>
							  <div class="box-controls pull-right">
								<div class="lookup lookup-circle lookup-right">
								  <input type="text" name="s">
								</div>
							  </div>
							</div>
							<div class="box-body no-padding">
								<div class="table-responsive">
								  	<table class="table mb-0">
										<tbody>
											<tr class="bg-info-light">
											  <th>No</th>
											  <th>Date</th>
											  <th>ID</th>
											  <th>Name</th>
											  <th>Age</th>
											  <th>Country</th>
											  <th>Gender</th>
											  <th>Settings</th>
											</tr>
											<tr>
											  <td>01</td>
											  <td>01/08/2021</td>
											  <td>DO-124585</td>
											  <td><strong>Shawn Hampton</strong></td>
											  <td>27</td>
											  <td>Miami</td>
											  <td>Male</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
											<tr>
											  <td>02</td>
											  <td>01/08/2021</td>
											  <td>DO-412577</td>
											  <td><strong>Polly Paul</strong></td>
											  <td>31</td>
											  <td>Naples</td>
											  <td>Female</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
											<tr>
											  <td>03</td>
											  <td>01/08/2021</td>
											  <td>DO-412151</td>
											  <td><strong>Harmani Doe</strong></td>
											  <td>21</td>
											  <td>Destin</td>
											  <td>Female</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
											<tr>
											  <td>04</td>
											  <td>01/08/2021</td>
											  <td>DO-123654</td>
											  <td><strong>Mark Wood</strong></td>
											  <td>30</td>
											  <td>Orlando</td>
											  <td>Male</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
											<tr>
											  <td>05</td>
											  <td>01/08/2021</td>
											  <td>DO-159874</td>
											  <td><strong>Johen Doe</strong></td>
											  <td>58</td>
											  <td>Tampa</td>
											  <td>Male</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>							
							<div class="box-footer bg-light py-10 with-border">
							    <div class="d-flex align-items-center justify-content-between">
									<p class="mb-0">Total 90 Patient</p>
									<a type="button" class="waves-effect waves-light btn btn-primary">View All</a>
								</div>
							</div>
						  </div>
						</div>
                        
						</div>
					</div>
				</div>
			</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/pages/dashboard3.js') }}"></script>
@endsection
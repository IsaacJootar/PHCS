@extends('layouts.menu')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="badge badge-success">ABUJA MUNICIPAL AREA COUNCIL, ABUJA.</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Primary Health Care Center: Daily Register</li>
            </ol>
            <br>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



   <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
    <form action="{{ route('dailies.update', $daily->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- general form elements (Daily Register) -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Primary Health Care Center: Daily Register: Edit for <label style="color: black">   {{$daily->patient_name }}</label></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>State </label>
                    <select name="state" class="form-control">
                      <option  value="{{ $daily->state }}"> {{ $daily->state }} </option>
                        <option value="ABUJA" >ABUJA FCT</option>
                        <option value="ABIA" >ABIA</option>
                        <option value="ADAMAWA" >ADAMAWA</option>
                        <option value="AKWA" >AKWA IBOM</option>
                        <option value="ANAMBRA" >ANAMBRA</option>
                        <option value="BAUCHI" >BAUCHI</option>
                        <option value="BAYELSA" >BAYELSA</option>
                        <option value="BENUE" >BENUE</option>
                        <option value="BORNO" >BORNO</option>
                        <option value="CROSS" >CROSS RIVER</option>
                        <option value="DELTA" >DELTA</option>
                        <option value="EBONYI" >EBONYI</option>
                        <option value="EDO" >EDO</option>
                        <option value="EKITI" >EKITI</option>
                        <option value="ENUGU" >ENUGU</option>
                        <option value="GOMBE" >GOMBE</option>
                        <option value="IMO" >IMO</option>
                        <option value="JIGAWA" >JIGAWA</option>
                        <option value="KADUNA" >KADUNA</option>
                        <option value="KANO" >KANO</option>
                        <option value="KATSINA" >KATSINA</option>
                        <option value="KEBBI" >KEBBI</option>
                        <option value="KOGI" >KOGI</option>
                        <option value="KWARA" >KWARA</option>
                        <option value="LAGOS" >LAGOS</option>
                        <option value="NASSARAWA" >NASSARAWA</option>
                        <option value="NIGER" >NIGER</option>
                        <option value="OGUN" >OGUN</option>
                        <option value="ONDO" >ONDO</option>
                        <option value="OSUN" >OSUN</option>
                        <option value="OYO" >OYO</option>
                        <option value="PLATEAU" >PLATEAU</option>
                        <option value="RIVERS" >RIVERS</option>
                        <option value="SOKOTO" >SOKOTO</option>
                        <option value="TARABA" >TARABA</option>
                        <option value="YOBE" >YOBE</option>
                        <option value="ZAMFARA" >ZAMFARA</option>
                        </select>   
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>LGA</label>
                    <input type="text" class="form-control" name="lga" value="{{ $daily->lga }}" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Ward </label>
                    <input type="text" class="form-control" name="ward" value="{{ $daily->ward }}" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name of health facility </label>
                    <input type="text" class="form-control" name="name_hf" value="{{ $daily->name_hf }}" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Month/year</label>
                    <input type="date" class="form-control" name="month_year" value="{{ $daily->month_year }}" placeholder="Enter ...">
                  </div>
                </div>
                <!--  -->
                
                <!-- end of bio info -->



                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Client Information</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-2">
                          <div class="form-group">
                            <label>Date Of Visit </label>
                            <input type="date" class="form-control" name="cl_date" value="{{ $daily->cl_date }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Name of patient/client</label>
                            <input type="text" class="form-control" name="name_patient" value="{{ $daily->name_patient }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label> Date of birth</label>
                            <input type="date" class="form-control" name="dob" value="{{ $daily->dob }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label> Gender </label><br>
                            <select name="cl_gender" value="{{ $daily->cl_gender }}" class="form-control" id="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label>Age/sex</label>
                            <select name="cl_sex" value="{{ $daily->cl_sex }}" class="form-control" id="">
                                <option>select...</option>
                                <option value="11 - 14 years">11 - 14 years</option>
                                <option value="15 - 19 years">15 - 19 years</option>
                                <option value="20 - 24 years">20 - 24 years</option>
                                <option value="25 - 29 years">25 - 29 years</option>
                                <option value="30 - 34 years">30 - 34 years</option>
                                <option value="35 - 49 years">35 - 49 years</option>
                                <option value="50 + years">50 + years</option>
                            </select>
                            <input type="text" class="form-control" name="cl_age" value="{{ $daily->cl_age }}" placeholder="Enter your Age">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Contact Address</label>
                            <input type="text" class="form-control" name="cl_address" value="{{ $daily->cl_address }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>State of Origin</label>
                            <input type="text" class="form-control" name="cl_state" value="{{ $daily->cl_state }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="cl_phone" value="{{ $daily->cl_phone }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>First Contact with Facility</label>
                            <select name="contact_fac" value="{{ $daily->contact_fac }}" class="form-control" id="">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Information of Next of Kin</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Name</label>
                            <input type="" class="form-control" name="nok_name" value="{{ $daily->nok_name }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Relationship with Client</label>
                            <input type="text" class="form-control" name="nok_relation" value="{{ $daily->nok_relation }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Contact Address</label>
                            <input type="text" class="form-control" name="nok_address" value="{{ $daily->nok_address }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="nok_phone" value="{{ $daily->nok_phone }}" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->
                
                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title"> Officer Use Only</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Name of reporting Officer</label>
                            <input type="" class="form-control" name="officer" value="{{ $daily->officer }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation" value="{{ $daily->designation }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Signation</label>
                            <input type="text" class="form-control" name="signation" value="{{ $daily->signation }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" name="officer_date" value="{{ $daily->officer_date }}" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

                <div  style="text-align: center" class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Record</button>
                  <a href="{{route('dailies.index')}}" class="btn btn-sm" role="button"><strong>Exit</strong></a>
                  
                </div>
              </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements  -->
      </form>
    </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
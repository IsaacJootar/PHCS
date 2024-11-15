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
              <li class="breadcrumb-item active">Health Facility: Tetanus Register</li>
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
      <form action="{{ route('tetanus.store') }}" method="POST">
      @csrf
        <!-- general form elements (OBSTETRIC SERVICES: Tetanus) -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Primary Health Care Center: Tetanus Register</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Patients Name </label>
                  <select name="patient_id" class="form-control select2" required>
                    <option value=""> Select | Search Patients  Name </option>
                    @foreach ($antenatal as $natal)
                    <option value="{{$natal->id}}">{{$natal->fname.' '.$natal->lname}}</option>
                    @endforeach
                   
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->

                
                  <div class="form-group">
                    <label>State </label>
                    <select name="state" class="form-control">
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
                    <input type="text" class="form-control" name="lga" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Ward </label>
                    <input type="text" class="form-control" name="ward" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name of health facility </label>
                    <input type="text" class="form-control" name="name_hf" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Date of patients visit</label>
                    <input type="date" class="form-control" name="dov" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label> Facility Type </label><br>
                    <select name="f_type" class="form-control" id="">
                        <option value="private">Private</option>
                        <option value="public">Public</option>
                    </select>
                  </div>
                </div>
                <!--  -->
                
                <!-- end of bio info -->



            
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title">Client Information </h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        
                        <div class="col-4">
                          <div class="form-group">
                            <label>Patients Card No.</label>
                            <input type="text" class="form-control" name="card_no" placeholder="Enter ...">
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Patient Date of Bith</label>
                            <input type="date" class="form-control" name="cl_dob" placeholder="Enter ...">
                          </div>
                        </div>
                        
                        <div class="col-4">
                          <div class="form-group">
                            <label> Follow Up Adress</label>
                            <input type="text" class="form-control" name="cl_adress" placeholder="Enter ...">
                          </div>
                        </div>
                      
                        <div class="col-4">
                          <div class="form-group">
                            <label> Patient phone number </label>
                            <input type="text" class="form-control" name="cl_phone" placeholder="Enter ...">
                          </div>
                        </div><p><br>
                    <label> Comment </label>
                        Note: a woman who had taken tt1/tt2 during pregnancy should proceed to complete the schedule even when she is not pregnant 
                      </div>
                    </div>
                  </div>
                </div>
           


                
                <!-- end clients information -->
                
                <!-- officer in charge -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Health Officer Use Only</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Name of reporting Officer</label>
                            <input type="text" class="form-control" name="officer" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation" placeholder="E.g Ward Attendence">
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group">
                            <label>Head of Unit Fullname</label>
                            <input type="text" class="form-control" name="ho_unit" placeholder="Enter fullname">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Signation</label>
                            <input type="text" class="form-control" name="sign" placeholder="Enter ...">
                          </div>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

                <div  class="card-footer">
                  <button type="submit" class="btn btn-primary">Save Record</button>
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
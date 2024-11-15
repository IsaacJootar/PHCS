@extends('layouts.menu')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ABUJA MUNICIPAL AREA COUNCIL, ABUJA.</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Health Facility: Tetanaus Register</li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Health Facility: Tetanus Register: View for <label style="color: black">   {{$tetanus->antenatal->fname . ' '.$tetanus->antenatal->fname }}</label> </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Details </th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong > Patients Name <br><strong ></td>
                        <td>{{ $tetanus->antenatal->fname.' '.$tetanus->antenatal->lname }} </td>
                    </tr>
                  <tr>
                    <td>State </td>
                    <td>{{ $tetanus->state }} </td>
                  </tr>
                  <tr>
                    <td>LGA</td>
                    <td>{{ $tetanus->lga }} </td>
                  </tr>
                  <tr>
                    <td>Ward </td>
                    <td>{{ $tetanus->ward }} </td>
                  </tr>
                  <tr>
                    <td>Name of health facility </td>
                    <td>{{ $tetanus->name_hf }} </td>
                  </tr>
                  <tr>
                    <td>Date of Visit</td>
                    <td>{{ $tetanus->dov }} </td>
                  </tr>
                  <tr>
                    <td>Fecility Type</td>
                    <td>{{ $tetanus->f_type }} </td>
                  </tr>
                  <tr>
                    <td>Patients  Card no.</td>
                    <td>{{ $tetanus->card_no }} </td>
                  </tr>
                  <tr>
                    <td> Date of birth</td>
                    <td>{{ $tetanus->cl_dob }} </td>
                  </tr>
                 
                  <tr>
                    <td>Patients Adress</td>
                    <td>{{ $tetanus->cl_adress }} </td>
                  </tr>
                 
                 
                  
                  <tr>
                    <td>Client Phone Number</td>
                    <td>{{ $tetanus->cl_phone }} </td>
                  </tr>
                  <tr>
                  
                
                  <tr>
                    <td>Name of Officer</td>
                    <td>{{ $tetanus->officer }} </td>
                  </tr>
                  <tr>
                    <td>Designation</td>
                    <td>{{ $tetanus->designation }} </td>
                  </tr>
                  <tr>
                    <td>Designation</td>
                    <td>{{ $tetanus->ho_unit }} </td>
                  </tr>
                  <tr>
                    <td>Signation</td>
                    <td>{{ $tetanus->sign }} </td>
                  </tr>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

                <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
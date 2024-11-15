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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Health Facility: Daily Register: View for <label style="color: black">   {{$daily->name_patient }}</label> </h3>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    
                  <tr>
                    <th>Title </th>
                    <th>Details </th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong > Patients Name <br><strong ></td>
                      <td>{{ $daily->name_patient }} </td>
                    </tr>
                  <tr>
                    <td>State </td>
                    <td>{{ $daily->state }} </td>
                  </tr>
                  <tr>
                    <td>LGA</td>
                    <td>{{ $daily->lga }} </td>
                  </tr>
                  <tr>
                    <td>Ward </td>
                    <td>{{ $daily->ward }} </td>
                  </tr>
                  <tr>
                    <td>Name of health facility </td>
                    <td>{{ $daily->name_hf }} </td>
                  </tr>
                  <tr>
                    <td>Month/year</td>
                    <td>{{ $daily->month_year }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $daily->cl_date }} </td>
                  </tr>
                  
                  <tr>
                    <td> Date of birth</td>
                    <td>{{ $daily->dob }} </td>
                  </tr>
                  <tr>
                    <td> Gender <br></td>
                    <td>{{ $daily->cl_gender }} </td>
                  </tr>
                  <tr>
                    <td>Age/sex</td>
                    <td>{{ $daily->cl_sex }} </td>
                  </tr>
                  <tr>
                    <td>Age</td>
                    <td>{{ $daily->cl_age }} </td>
                  </tr>
                  <tr>
                    <td>Contact Address</td>
                    <td>{{ $daily->cl_address }} </td>
                  </tr>
                  <tr>
                    <td>State of Origin</td>
                    <td>{{ $daily->cl_state }} </td>
                  </tr>
                  <tr>
                    <td>Client Phone Number</td>
                    <td>{{ $daily->cl_phone }} </td>
                  </tr>
                  <tr>
                    <td>First Contact with Facility</td>
                    <td>{{ $daily->contact_fac }} </td>
                  </tr>
                  <tr>
                    <td>Next of kin Name</td>
                    <td>{{ $daily->nok_name }} </td>
                  </tr>
                  <tr>
                    <td>Relationship to Client</td>
                    <td>{{ $daily->nok_relation }} </td>
                  </tr>
                  <tr>
                    <td>Next of kin Contact Address</td>
                    <td>{{ $daily->nok_address }} </td>
                  </tr>
                  <tr>
                    <td>Next of kin phone Number</td>
                    <td>{{ $daily->nok_phone }} </td>
                  </tr>
                  <tr>
                    <td>Name of Officer</td>
                    <td>{{ $daily->officer }} </td>
                  </tr>
                  <tr>
                    <td>Designation</td>
                    <td>{{ $daily->designation }} </td>
                  </tr>
                  <tr>
                    <td>Signation</td>
                    <td>{{ $daily->signation }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $daily->officer_date }} </td>
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
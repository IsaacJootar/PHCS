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
              <li class="breadcrumb-item active">Primary Health Care Center: Clinic Notes</li>
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
                <h3 class="card-title">Health Facility: Clinic Notes: View for <label style="color: black">   {{$note->antenatal->fname . ' '.$note->antenatal->fname }}</label> </h3>
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
                      <td>Name of patient/client</td>
                      <td>{{ $note->antenatal->fname.' '.$note->antenatal->lname }} </td>
                    </tr>
                  <tr>
                    <td>Date of Visit </td>
                    <td>{{ $note->dov }} </td>
                  </tr>
                  <tr>
                    <td>Source / Section</td>
                    <td>{{ $note->section }} </td>
                  </tr>


                  <tr>
                    <td>Phone</td>
                    <td>{{ $note->phone }} </td>
                  </tr>
                  <tr>
                    <td>Note Details</td>
                    <td>{{ $note->note }} </td>
                  </tr>
                  


                  <tr>
                    <td>Reporting Officer</td>
                    <td>{{ $note->officer }} </td>
                  </tr>
                  


                  <tr>
                    <td>Designation</td>
                    <td>{{ $note->designation }} </td>
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
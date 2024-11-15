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
              <li class="breadcrumb-item active">Health Health Care Center: Primary Assessment</li>
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
                <h3 class="card-title">Primary Health Care Center: Assessment Register </h3>
              </div><br>
              <div style="text-align: center">
              <a href="{{ route('antenatals.create') }}" class="btn btn-primary">+ Create New Folder</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>First Name</th>
                    <th>Date of Booking</th>
                
                    <th>contact Address</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($antenatals as $antenatal)
                  <tr>
                    <td>{{ $antenatal->lname }}</td>
                    <td>{{ $antenatal->fname }} </td>
                    <td>{{ $antenatal->dobk }} </td>
                  
                    <td>{{ $antenatal->address }}</td>
                    <td><a href="{{ route('antenatals.show', $antenatal->id) }}" class="btn btn-info">View Record</a>
                        <a href="{{ route('antenatals.edit', $antenatal->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('antenatals.destroy', $antenatal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form></td>
                  </tr>
                  @endforeach
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
  </div>
  <!-- /.content-wrapper -->


@endsection
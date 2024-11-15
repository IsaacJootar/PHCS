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
              <li class="breadcrumb-item active">Primary Health Care Center: Post Natal</li>
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
              <h3 class="card-title">Primary Health Care Center: Post Natal </h3>
            </div><br>
            <div style="text-align: center">
            <a href="{{ route('post_natal.create')}}" class="btn btn-primary">+ Create Record</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name of patient/client</th>
                  <th>Date of visit</th>
                  <th>Patient Ward Number</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts_natal as $post_natal)
                <tr>
                  <td>{{ $post_natal->antenatal->fname. ' '. $post_natal->antenatal->lname }} </td>
                  <td>{{ $post_natal->month_year }}</td>
                 
                  <td>{{ $post_natal->patient_f }}</td>
                  <td><a href="{{ route('post_natal.show', $post_natal->id) }}" class="btn btn-info  btn-sm">View Record</a>
                      <a href="{{ route('post_natal.edit', $post_natal->id) }}" class="btn btn-primary btn-sm">Edit</a>
                      <form action="{{ route('post_natal.destroy', $post_natal->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger  btn-sm">Delete</button>
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
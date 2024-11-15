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
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Welcome: <strong> {{Auth::user()->fullname}}</strong></li>
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
      @include('layouts.stats_bar')
    </section>

   
   <!-- Main content -->

   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
        
          <!-- /.card -->

          <div class="card">
            <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title"> <label for="Paasword">Update Your Password Here </label></h3>
            </div>           </div>
            <!-- error Message from session -->
           @if ($errors->any())
           <div class="alert alert-danger">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                   <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
           </div>
                 @endif
            <!-- /.card-header -->
            <div class="card-body p-0">
            
                <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('PUT')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="room">Enter Current Password </label>
                        <input type="text" required  name="current_password" class="form-control" id="password" placeholder=" Current password">
                      </div>
                      <div class="form-group">
                        <label for="room">New Password </label>
                        <input type="text" required  name="password" class="form-control" id="Paaword" placeholder="New Password">
                      </div>
                      
                      <div class="form-group">
                        <label for="room">Comfirm New Password </label>
                        <input type="text"  required name="password_confirmation" class="form-control" id="Paaword" placeholder="Comfirm Password">
                      </div>
                      
                     </div>
              
                     

                    
                </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
@endsection


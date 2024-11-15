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
      <!-- Info boxes -->
      
      <!-- /.row -->



      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg"><strong> Staff Login </strong> </p>
    
          <form action="{{route('login')}}" method="post">
            @csrf
          
            
    
            <div class="input-group mb-3">
                <input  value="{{old('username')}}" name="username" type="text" class="form-control" placeholder="User name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
           
            <div class="input-group mb-3">
              <input name="password" type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div><div class="block mt-6">
              <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox" name="remember">
                  <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
              </label>
          </div>
            
            <div class="row">
              
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
    
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
          <!-- /.card -->

          <!-- PRODUCT LIST -->
          
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
<!-- /.content -->


@endsection


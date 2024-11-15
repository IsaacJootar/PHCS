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
              <li class="breadcrumb-item active">Primary Health Care Center: note Register</li>
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
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- general form elements (note Register) -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Primary Health Care Center: Clinic Note: Edit for <label style="color: black">   {{$note->antenatal->fname . ' '.$note->antenatal->fname }}</label></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              
            <div class="row">
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Date of Visit</label>
                    <input type="date" value="{{ $note->dov }}" class="form-control" name="dov" required>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                    <label> Source / Section </label><br>
                    <select name="section" class="form-control" id="" required>
                      <option value="{{ $note->section }}">{{ $note->section }}</option>
                      <option value=""> Select Source </option>
                        <option value="Tetanus">Tenatus</option>
                        <option value="Delivery">Delivery</option>
                        <option value="Postnatal">Postnatal</option>
                        <option value="Check-up Tests">Check-up Tests</option>
                        <option value="General Assessment">General Assessment</option>
                    </select>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" value="{{ $note->phone }}" class="form-control" name="phone" required>
                  </div>
                </div>
               
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Note Details</label>
                    
                    <textarea name="note"  style="width: 100%;" rows="5" required>{{ $note->note }}</textarea>
                  </div>
                </div>
                <!--  -->
                
                <!-- end of bio info -->



               
                <!-- official use -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Officer Use Only</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-5">
                          <div class="form-group">
                            <label>Name of Reporting Officer</label>
                            <input type="text" class="form-control" value="{{ $note->officer }}" name="officer" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" value="{{ $note->designation}}" name="designation" placeholder="Enter ...">
                          </div>
                        </div>
                        
                

                <div  style="text-align: center" class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Record</button>
                  <a href="{{route('notes.index')}}" class="btn btn-sm" role="button"><strong>Exit</strong></a>
                  
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
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
      <form action="{{ route('notes.store') }}" method="POST">
      @csrf
        <!-- general form elements (OBSTETRIC SERVICES: Notes) -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Primary Health Care Center: Clinic Notes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                <div class="col-sm-2">
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
                
                <div class="col-sm-2">
                  <div class="form-group">
                    <label>Date of Visit</label>
                    <input type="date" class="form-control" name="dov" required>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                    <label> Source / Section </label><br>
                    <select name="section" class="form-control" id="" required>
                      <option value=""> Select Source </option>
                        <option value="tetanus">Tenatus</option>
                        <option value="delivery">Delivery</option>
                        <option value="post">Postnatal</option>
                        <option value="tests">Check-up Tests</option>
                        <option value="ga">General Assessment</option>
                    </select>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter ..." required>
                  </div>
                </div>
               
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Note Details</label>
                    
                    <textarea name="note"  style="width: 100%;" rows="5" required></textarea>
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
                            <input type="text" class="form-control" name="officer" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation" placeholder="Enter ...">
                          </div>
                        </div>
                        
                       
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

                <div style="align-content:center" class="card-footer">
                  <button type="submit" class="btn btn-primary"> Save Note</button>
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
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
              <li class="breadcrumb-item active">Primary Health Care Center: Patients Records</li>
            </ol>
          
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card-header">
        <h3 class="card-title">Primary Health Care Center: Patients Record for:  <strong style="color: black"> {{$antenatal->lname.' '. $antenatal->fname}}</strong> </h3><div style="float: right"><a href="{{route('clients.index')}}" > <i class="nav-icon far fa-arrow-alt-circle-left"> </i> back</a></div>
      </div>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
          
                <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">Assessment Records Folder: </h3>
                    </div>
                    
              <!-- /.card-header -->
            
            
              <div class="card-body">
               
                  
                <div class="row mt-7" >
                  <a href="{{ route('antenatals.show', $antenatal->id)}}" >
                
                 Click on folder to view <i class="nav-icon far fa-arrow-alt-circle-right"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                    <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z"/>
                  </svg>
                </a>
                </div>
             
              </div>
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->
            <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Post Natal Records  <i class="nav-icon fas fa-procedures"></i></h3>  
                </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
              <tr>
              
                <th>Date of visit</th>
              
                
                <th>Patient Ward Number</th>

                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($posts as $post)
              <tr>
                
                <td>{{ $post->month_year }}</td>
              
                <td>{{ $post->patient_f }}</td>
               
                <td><a href="{{ route('post_natal.show', $post->id) }}">View |</a>
                    <a href="{{ route('post_natal.edit', $post->id) }}">Edit |</a>
                    <form action="{{ route('post_natal.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form></td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
         
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Clinic Notes <i class="nav-icon fas fa-book-medical"></i> </h3>
                    </div>
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                  <tr>
                  
                    <th>Date of visit</th>
                  
                    
                    <th>Phone Number</th>
    
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($notes as $note)
                  <tr>
                    
                    <td>{{ $note->dov }}</td>
                  
                    <td>{{ $note->phone }}</td>
                   
                    <td><a href="{{ route('notes.show', $note->id) }}">View |</a>
                        <a href="{{ route('notes.edit', $note->id) }}">Edit |</a>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
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

          
        
        <div class="col-md-6">
          
            <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Tetanus Records      <i class="nav-icon fas fa-file-medical-alt"></i></h3>
                </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                  <tr>
                  
                    <th>Date of visit</th>
                  
                    
                    <th>Phone Number</th>
    
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($tetanus as $tetanu)
                  <tr>
                    
                    <td>{{ $tetanu->dov }}</td>
                  
                    <td>{{ $tetanu->cl_phone }}</td>
                   
                    <td><a href="{{ route('tetanus.show', $tetanu->id) }}">View |</a>
                        <a href="{{ route('tetanus.edit', $tetanu->id) }}">Edit |</a>
                        <form action="{{ route('tetanus.destroy', $tetanu->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
             
              </div>
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
            
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Attendance Records (Daily Register)   <i class="nav-icon fas fa-book"></i></i></h3>
              </div>
        
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                <tr>
                
                  <th>Date of visit</th>
                
                  
                  <th>Phone Number</th>
  
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($dailies as $daily)
                <tr>
                  
                  <td>{{ $daily->cl_date }}</td>
                
                  <td>{{ $daily->cl_phone }}</td>
                 
                  <td><a href="{{ route('dailies.show', $daily->id) }}">View |</a>
                      <a href="{{ route('dailies.edit', $daily->id) }}">Edit |</a>
                      <form action="{{ route('dailies.destroy', $daily->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit">Delete</button>
                      </form></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Delivery Records   <i class="nav-icon fas fa-procedures"></i></h3>
                </div>
          
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                  <tr>
                  
                    <th>Date of visit</th>
                  
                    
                    <th>Phone Number</th>
    
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($dailies as $daily)
                  <tr>
                    
                    <td>{{ $daily->cl_date }}</td>
                  
                    <td>{{ $daily->cl_phone }}</td>
                   
                    <td><a href="{{ route('dailies.show', $daily->id) }}">View |</a>
                        <a href="{{ route('dailies.edit', $daily->id) }}">Edit |</a>
                        <form action="{{ route('dailies.destroy', $daily->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
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
      
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->


@endsection
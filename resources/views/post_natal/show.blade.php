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
              <li class="breadcrumb-item active">Health Facility: Post Natal Register</li>
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
                <h3 class="card-title">Health Facility: Post Natal Register: Show for <label style="color: black">   {{$post->antenatal->fname . ' '.$post->antenatal->fname }}</label> </h3>
              </div>
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
                        <td>{{ $post->antenatal->fname.' '.$post->antenatal->lname }} </td>
                    </tr>
                  <tr>
                    <td>State </td>
                    <td>{{ $post->state }} </td>
                  </tr>
                  <tr>
                    <td>LGA</td>
                    <td>{{ $post->lga }} </td>
                  </tr>
                  <tr>
                    <td>Ward </td>
                    <td>{{ $post->ward }} </td>
                  </tr>
                  <tr>
                    <td>Name of health facility </td>
                    <td>{{ $post->name_hf }} </td>
                  </tr>
                  <tr>
                    <td>Date of Visit</td>
                    <td>{{ $post->month_year }} </td>
                  </tr>
                  <tr>
                    <td>Patient Phone</td>
                    <td>{{ $post->patient_f }} </td>
                  </tr>
                  <tr>
                    <td>Patients Age Range</td>
                    <td>{{ $post->range }} </td>
                  </tr>
                  <tr>
                    <td>Age of Patient</td>
                    <td>{{ $post->age }} </td>
                  </tr>
                 
                  <tr>
                    <td>Parity </td>
                    <td>{{ $post->parity }} </td>
                  </tr>
                 
                 
                  
                  <tr>
                    <td>Attendance Type</td>
                    <td>{{ $post->cl_attend }} </td>
                  </tr>
                  
                
                  <tr>
                    <td>Associated Problems</td>
                    <td>{{ $post->assos_prob }} </td>
                  </tr>
                  <tr>
                    <td>Postal Care: Mother</td>
                    <td>{{ $post->post_mother }} </td>
                  </tr>
                  <tr>
                    <td>Postal Care: Child</td>
                    <td>{{ $post->post_child }} </td>
                  </tr>
                  <tr>
                    <td>Sex of Child </td>
                    <td>{{ $post->sex_child }} </td>
                  </tr>
                  <tr>
                    <td>Maternal Nutrition</td>
                    <td>{{ $post->nutri }} </td>
                  </tr>
                  <tr>
                    <td>Excessive Breastfeeding</td>
                    <td>{{ $post->breast }} </td>
                  </tr>
                  <tr>
                    <td>Complementary Feeding</td>
                    <td>{{ $post->feeding }} </td>
                  </tr>
                  <tr>
                    <td>Family planning</td>
                    <td>{{ $post->planning }} </td>
                  </tr>
                  <tr>
                    <td>Female Genital Mutilation (FGM)</td>
                    <td>{{ $post->fgm }} </td>
                  </tr>
                  <tr>
                    <td>Vaginal Examination</td>
                    <td>{{ $post->vagina}} </td>
                  </tr>
                  <tr>
                    <td>HB/PCV </td>
                    <td>{{ $post->pcv }} </td>
                  </tr>
                  <tr>
                    <td>Urinalysis (Sugar test res)</td>
                    <td>{{ $post->urine }} </td>
                  </tr>
                  <tr>
                    <td>Neonatal Complications</td>
                    <td>{{ $post->new_born }} </td>
                  </tr>
                  <tr>
                    <td>KMC</td>
                    <td>{{ $post->kmc }} </td>
                  </tr>
                  <tr>
                    <td>Outcome of Visi</td>
                    <td>{{ $post->visit }} </td>
                  </tr>
                  <tr>
                    <td>Name of reporting Officer</td>
                    <td>{{ $post->officer }} </td>
                  </tr>
                  <tr>
                    <td>Designation</td>
                    <td>{{ $post->designation }} </td>
                  </tr>
                  <tr>
                    <td>Sign</td>
                    <td>{{ $post->sign }} </td>
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
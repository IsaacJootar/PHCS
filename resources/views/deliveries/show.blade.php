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
              <li class="breadcrumb-item active">Health Facility: Delivery Register</li>
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
                <h3 class="card-title">Health Facility: Delivery Register: View for <label style="color: black">   {{$delivery->antenatal->fname . ' '.$delivery->antenatal->fname }}</label> </h3>
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
                        <td>{{ $delivery->antenatal->fname.' '.$delivery->antenatal->lname }} </td>
                    </tr>
                  <tr>
                    <td>State </td>
                    <td>{{ $delivery->state }} </td>
                  </tr>
                  <tr>
                    <td>LGA</td>
                    <td>{{ $delivery->lga }} </td>
                  </tr>
                  <tr>
                    <td>Ward </td>
                    <td>{{ $delivery->ward }} </td>
                  </tr>
                  <tr>
                    <td>Name of health facility </td>
                    <td>{{ $delivery->name_hf }} </td>
                  </tr>
                  <tr>
                    <td>Month/year</td>
                    <td>{{ $delivery->month_year }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $delivery->cl_date }} </td>
                  </tr>
                  <tr>
                    <td>Name of patient/client</td>
                    <td>{{ $delivery->name_patient }} </td>
                  </tr>
                  <tr>
                    <td>Age</td>
                    <td>{{ $delivery->cl_sex }} </td>
                  </tr>
                  <tr>
                    <td>Types of clients  <br></td>
                    <td>{{ $delivery->toc }} </td>
                  </tr>
                  <tr>
                    <td>Decision in seeking care <br></td>
                    <td>{{ $delivery->seeking_care }} </td>
                  </tr>
                  <tr>
                    <td>Transportation in<br></td>
                    <td>{{ $delivery->transportation }} </td>
                  </tr>
                  <tr>
                    <td>Parity</td>
                    <td>{{ $delivery->parity }} </td>
                  </tr>
                  <tr>
                    <td>Date of delivery</td>
                    <td>{{ $delivery->dodel }} </td>
                  </tr>
                  <tr>
                    <td>Phone Number</td>
                    <td>{{ $delivery->cl_phone }} </td>
                  </tr>
                  <tr>
                    <td>Mode of delivery</td>
                    <td>{{ $delivery->mod }} </td>
                  </tr>
                  <tr>
                    <td>Partograph used</td>
                    <td>{{ $delivery->partograph }} </td>
                  </tr>
                  <tr>
                    <td>Received oxytocin</td>
                    <td>{{ $delivery->oxytocin }} </td>
                  </tr>
                  <tr>
                    <td>Received misoprostol</td>
                    <td>{{ $delivery->misoprostol }} </td>
                  </tr>
                  <tr>
                    <td>Alive</td>
                    <td>{{ $delivery->alive }} </td>
                  </tr>
                  <tr>
                    <td>Admitted</td>
                    <td>{{ $delivery->admitted }} </td>
                  </tr>
                  <tr>
                    <td>Discharged </td>
                    <td>{{ $delivery->discharged }} </td>
                  </tr>
                  <tr>
                    <td>Referred-out</td>
                    <td>{{ $delivery->referred_out }} </td>
                  </tr>
                  <tr>
                    <td>Received post abortion care (PAC)</td>
                    <td>{{ $delivery->pac }} </td>
                  </tr>
                  <tr>
                    <td>Transportation in<br></td>
                    <td>{{ $delivery->mother_transportation }} </td>
                  </tr>
                  <tr>
                    <td>Dead</td>
                    <td>{{ $delivery->dead }} </td>
                  </tr>
                  <tr>
                    <td>MDA conducted </td>
                    <td>{{ $delivery->MDA_conducted }} </td>
                  </tr>
                  <tr>
                    <td>MDA not conducted </td>
                    <td>{{ $delivery->MDA_not_conducted }} </td>
                  </tr>
                  <tr>
                    <td>Abortion </td>
                    <td>{{ $delivery->abortion }} </td>
                  </tr>
                  <tr>
                    <td>Time of delivery </td>
                    <td>{{ $delivery->time_of_delivery }} </td>
                  </tr>
                  <tr>
                    <td>Pre term</td>
                    <td>{{ $delivery->pre_term }} </td>
                  </tr>
                  <tr>
                    <td>Not breathing/not crying at birth </td>
                    <td>{{ $delivery->breathing }} </td>
                  </tr>
                  <tr>
                    <td>Live birth (write exact weight) </td>
                    <td>{{ $delivery->weight }} </td>
                  </tr>
                  <tr>
                    <td>Still birth</td>
                    <td>{{ $delivery->still_birth }} </td>
                  </tr>
                  <tr>
                    <td>Dead </td>
                    <td>{{ $delivery->baby_dead }} </td>
                  </tr>
                  <tr>
                    <td>Live births (HIV positive woman only) </td>
                    <td>{{ $delivery->live_births }} </td>
                  </tr>
                  <tr>
                    <td>Sex of baby</td>
                    <td>{{ $delivery->baby_sex }} </td>
                  </tr>
                  <tr>
                    <td>Who took delivery of the baby </td>
                    <td>{{ $delivery->took_delivery }} </td>
                  </tr>
                  <tr>
                    <td>Doctor, midwife or nurse, MLSS trained CHEW and Others </td>
                    <td>{{ $delivery->doctor }} </td>
                  </tr>
                  <tr>
                    <td>Immediate newborn care provided  </td>
                    <td>{{ $delivery->newborn_care }} </td>
                  </tr>
                  <tr>
                    <td>Time cord was clamped   </td>
                    <td>{{ $delivery->clamped }} </td>
                  </tr>
                  <tr>
                    <td>Tick if 4% CKX gel is applied to cord at birth  </td>
                    <td>{{ $delivery->CKX_gel }} </td>
                  </tr>
                  <tr>
                    <td>Tick if baby was put to breast </td>
                    <td>{{ $delivery->breast }} </td>
                  </tr>
                  <tr>
                    <td>Temperature at 2 hours  </td>
                    <td>{{ $delivery->temperature }} </td>
                  </tr>
                  <tr>
                    <td>Exclusive breastfeeding </td>
                    <td>{{ $delivery->breastfeeding }} </td>
                  </tr>
                  <tr>
                    <td>Postpartum Family planning </td>
                    <td>{{ $delivery->postpartum }} </td>
                  </tr>
                  <tr>
                    <td>Name of person who took delivery </td>
                    <td>{{ $delivery->took_del }} </td>
                  </tr>
                  <tr>
                    <td>Name of reporting Officer</td>
                    <td>{{ $delivery->officer }} </td>
                  </tr>
                  <tr>
                    <td>Designation</td>
                    <td>{{ $delivery->designation }} </td>
                  </tr>
                  <tr>
                    <td>Signation</td>
                    <td>{{ $delivery->signation }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $delivery->officer_date }} </td>
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
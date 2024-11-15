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
              <li class="breadcrumb-item active">rimary Health Care Center: Post Natal</li>
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
      <form action="{{ route('post_natal.update', $post->id) }}" method="POST">
      @csrf
      @method('PUT')
        <!-- general form elements (POST NATAL ) -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Health Facility: Post Natal Register: Edit for <label style="color: black">   {{$post->antenatal->fname . ' '.$post->antenatal->fname }}</label> </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>State </label>
                    <select name="state" class="form-control">
                      <option value="{{ $post->ward }}"> {{ $post->state }}</option>
                        <option value="ABUJA" >ABUJA FCT</option>
                        <option value="ABIA" >ABIA</option>
                        <option value="ADAMAWA" >ADAMAWA</option>
                        <option value="AKWA" >AKWA IBOM</option>
                        <option value="ANAMBRA" >ANAMBRA</option>
                        <option value="BAUCHI" >BAUCHI</option>
                        <option value="BAYELSA" >BAYELSA</option>
                        <option value="BENUE" >BENUE</option>
                        <option value="BORNO" >BORNO</option>
                        <option value="CROSS" >CROSS RIVER</option>
                        <option value="DELTA" >DELTA</option>
                        <option value="EBONYI" >EBONYI</option>
                        <option value="EDO" >EDO</option>
                        <option value="EKITI" >EKITI</option>
                        <option value="ENUGU" >ENUGU</option>
                        <option value="GOMBE" >GOMBE</option>
                        <option value="IMO" >IMO</option>
                        <option value="JIGAWA" >JIGAWA</option>
                        <option value="KADUNA" >KADUNA</option>
                        <option value="KANO" >KANO</option>
                        <option value="KATSINA" >KATSINA</option>
                        <option value="KEBBI" >KEBBI</option>
                        <option value="KOGI" >KOGI</option>
                        <option value="KWARA" >KWARA</option>
                        <option value="LAGOS" >LAGOS</option>
                        <option value="NASSARAWA" >NASSARAWA</option>
                        <option value="NIGER" >NIGER</option>
                        <option value="OGUN" >OGUN</option>
                        <option value="ONDO" >ONDO</option>
                        <option value="OSUN" >OSUN</option>
                        <option value="OYO" >OYO</option>
                        <option value="PLATEAU" >PLATEAU</option>
                        <option value="RIVERS" >RIVERS</option>
                        <option value="SOKOTO" >SOKOTO</option>
                        <option value="TARABA" >TARABA</option>
                        <option value="YOBE" >YOBE</option>
                        <option value="ZAMFARA" >ZAMFARA</option>
                        </select>   
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>LGA</label>
                    <input type="text" value="{{ $post->lga }}" class="form-control" name="lga" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Ward </label>
                    <input type="text" value="{{$post->ward}}" class="form-control" name="ward" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name of health facility </label>
                    <input type="text" value="{{ $post->name_hf }}" class="form-control" name="name_hf" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Month/year</label>
                    <input type="date" value="{{ $post->month_year }}" class="form-control" name="month_year" placeholder="Enter ...">
                  </div>
                </div>
                <!--  -->
              



                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Client Information</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        
                        <div class="col-4">
                          <div class="form-group">
                            <label>Name of patient/client</label>
                            <input disabled type="text" value="{{ $post->patient_n}}"  class="form-control" name="patient_n" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Patient/client Ward Number</label>
                            <input type="text" value="{{$post->patient_f}}"  class="form-control" name="patient_f" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Age Range</label>
                            <select name="range" class="form-control" id="">
                                <option value="{{ $post->range }}" >{{ $post->range }} </option>
                                <option value="11 - 14 years">11 - 14 years</option>
                                <option value="15 - 19 years">15 - 19 years</option>
                                <option value="20 - 24 years">20 - 24 years</option>
                                <option value="25 - 29 years">25 - 29 years</option>
                                <option value="30 - 34 years">30 - 34 years</option>
                                <option value="35 - 49 years">35 - 49 years</option>
                                <option value="50 + years">50 + years</option>
                            </select>
                            <input type="text" value="{{ $post->age }}"  class="form-control" name="age" placeholder="Enter your Age">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Parity</label>
                            <input type="text"  value="{{ $post->parity}}" class="form-control" name="parity" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Attendance Type: Select</label>
                            <select  name="cl_attend" class="form-control" id="">
                              <option value="{{ $post->cl_attend }}" >{{ $post->cl_attend }} </option>
                                <option value="new">New</option>
                                <option value="revisit">Revisit</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Associated Problems</label>
                            <input type="text" value="{{ $post->assos_prob }}" class="form-control" name="assos_prob" placeholder="Enter ...">
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end client Info -->

                <!-- Post Natal -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Postnatal Care</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Mother</label>
                            <select name="post_mother" class="form-control" id="">
                              <option value="{{ $post->post_mother }}" >{{ $post->post_mother }} </option>
                             
                              <option value="1 - day">1 Day</option>
                              <option value="2 - 3 days">2- 3 Days</option>
                              <option value="4 - 7 years">4 - 7 Days</option>
                              <option value="7 + days">Over 7 Days</option>
                              
                          </select>
                         
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>New Born Child</label>
                            <select name="post_child" class="form-control" id="">
                              <option value="{{ $post->post_child }}">{{ $post->post_mother }}</option>
                             
                              <option value="1 - day">1 Day</option>
                              <option value="2 - 3 days">2- 3 Days</option>
                              <option value="4 - 7 years">4 - 7 Days</option>
                              <option value="7 + day">Over 7 Days</option>
                              
                          </select>
                         
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group">
                            <label>Sex of Child</label>
                            <select name="sex_child" class="form-control" id="">
                              <option value="{{ $post->post_mother }}">{{ $post->sex_child }}</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              
                          </select>
                         
                          </div>
                        </div>
                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>

                
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Maternal Care</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Maternal Nutrition</label>
                            <input value="{{ $post->nutri }}" type="text" class="form-control" name="nutri" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Excessive Breastfeeding</label>
                            <input value="{{ $post->breast }}" type="text" class="form-control" name="breast" placeholder="Enter ...">
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="form-group">
                            <label>Complementary Feeding</label>
                            <input value="{{ $post->feeding }}" type="text" class="form-control" name="feeding" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Family planning</label>
                            <input value="{{ $post->planning }}" type="text" class="form-control" name="planning" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Female Genital Mutilation (FGM)</label>
                            <input value="{{ $post->fgm }}" type="text" class="form-control" name="fgm" placeholder="Enter ...">
                          </div>
                        </div>
              
                        <div class="col-3">
                          <div class="form-group">
                            <label>Vaginal Examination</label>
                            <input value="{{ $post->vagina }}" type="text" class="form-control" name="vagina" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>HB/PCV (Write test result)</label>
                            <input value="{{ $post->pvc }}" type="text" class="form-control" name="pcv" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label> Urinalysis (Sugar test result)
                            </label>
                            <input value="{{ $post->urine }}" type="text" class="form-control" name="urine" placeholder="Enter ...">
                          </div>
                        </div>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title">  Newborn Care</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Neonatal Complications
                            </label>
                            <select name="new_born" class="form-control" id="">
                              <option value="{{ $post->new_born }}">{{ $post->new_born }}</option>
                              <option value="newborn with danger signs">Newborn with danger signs</option>
                              <option value="newborn with danger signs given first">Newborn with danger signs given first</option>
                              <option value="neonatal tetanus">Neonatal Tetanus</option>
                              <option value=" neonatal jaundice">Neonatal Jaundice</option>
                              
                              
                          </select>
                         
                          </div>
                        </div>  
                        <div class="col-3">
                          <div class="form-group">
                            <label> KMC (tick as appropriate)  </label>
                            <select name="kmc" class="form-control" id="">
                              <option value="{{ $post->kmc }}" >{{ $post->kmc }}</option>
                              <option value="admitted">Admitted</option>
                              <option value="discharged">Discharged</option>
                              <option value="transportation out">Transportation out</option>
                        
                              
                              
                          </select>
                         
                          </div>
                        </div>  
                        <div class="col-3">

                        <div class="form-group">
                          <label>Outcome of Visit  </label>
                          <select name="visit" class="form-control" id="">
                            <option value="{{ $post->visit}}">{{ $post->visit }}</option>
                            <option value="not treated">Not Treated</option>
                            <option value="treated">Treated</option>
                            <option value="admitted">Admitted</option>
                            <option value="referral out">  Referral out</option>
                          <option value="discharged">Discharged</option>
                            
                            
                        </select>
                       
                        </div>
                      </div> 
                        
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <!-- Maternal Care -->
                <div class="col-sm-12">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title"> Officer Use Only</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Name of reporting Officer</label>
                            <input value="{{ $post->visit }}" type="text" class="form-control" name="officer" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Designation</label>
                            <input value="{{ $post->designation }}" type="text" class="form-control" name="designation" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Signation</label>
                            <input  value="{{ $post->sign }}" type="text" class="form-control" name="sign" placeholder="Enter ...">
                          </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Record</button>
                  <a href="{{route('post_natal.index')}}" class="btn btn-sm" role="button"><strong>Exit</strong></a>
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
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
              <li class="breadcrumb-item active">Primary Health Care Center: Delivery Register</li>
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
    <form action="{{ route('deliveries.update', $delivery->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- general form elements (OBSTETRIC SERVICES: Ante Natal Notes) -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Health Facility: delivery Register: Edit for <label style="color: black">   {{$delivery->antenatal->fname . ' '.$delivery->antenatal->fname }}</label> </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>State </label>
                    <select name="state" value="{{ $delivery->state }}" class="form-control">
                        <option value="{{ $delivery->state }}">{{ $delivery->state }}</option>
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
                    <input type="text" class="form-control" name="lga" value="{{ $delivery->lga }}" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Ward </label>
                    <input type="text" class="form-control" name="ward" value="{{ $delivery->ward }}" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name of health facility </label>
                    <input type="text" class="form-control" name="name_hf" value="{{ $delivery->name_hf }}" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Month/year</label>
                    <input type="date" class="form-control" name="month_year" value="{{ $delivery->month_year }}" placeholder="Enter ...">
                  </div>
                </div>
                <!--  -->
                
                <!-- end of bio info -->



                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Client Information</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" name="cl_date" value="{{ $delivery->cl_date }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Name of patient/client</label>
                            <input type="text" class="form-control" name="name_patient" value="{{ $delivery->name_patient }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Age</label>
                            <select name="cl_sex" value="{{ $delivery->cl_sex }}" class="form-control" id="">
                                <option value="{{ $delivery->cl_sex }}">{{ $delivery->cl_sex }}</option>
                                <option value="11 - 14 years">11 - 14 years</option>
                                <option value="15 - 19 years">15 - 19 years</option>
                                <option value="20 - 24 years">20 - 24 years</option>
                                <option value="25 - 29 years">25 - 29 years</option>
                                <option value="30 - 34 years">30 - 34 years</option>
                                <option value="35 - 49 years">35 - 49 years</option>
                                <option value="50 + years">50 + years</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label> Types of clients  </label><br>
                            <select name="toc" value="{{ $delivery->toc }}" class="form-control" id="">
                                <option value="{{ $delivery->toc }}">{{ $delivery->toc }}</option>
                                <option value="Booked">Booked</option>
                                <option value="Unbooked">Unbooked</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label> Decision in seeking care </label><br>
                            <select name="seeking_care" value="{{ $delivery->seeking_care }}" class="form-control" id="">
                                <option value="{{ $delivery->seeking_care }}">{{ $delivery->seeking_care }}</option>
                                <option value="Less than 24hrs">Less than 24hrs</option>
                                <option value="More than 24hrs">More than 24hrs</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label> Transportation in</label><br>
                            <select name="transportation" value="{{ $delivery->transportation }}" class="form-control" id="">
                                <option value="{{ $delivery->transportation }}">{{ $delivery->transportation }}</option>
                                <option value="vehicle">Vehicle</option>
                                <option value="ambulance">Ambulance</option>
                                <option value="others">Others</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Parity</label>
                            <input type="text" class="form-control" name="parity" value="{{ $delivery->parity }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Date of delivery</label>
                            <input type="date" class="form-control" name="dodel" value="{{ $delivery->dodel }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="cl_phone" value="{{ $delivery->cl_phone }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Mode of delivery</label>
                            <select name="mod" value="{{ $delivery->mod }}" class="form-control" id="">
                                <option value="{{ $delivery->mod }}">{{ $delivery->mod }}</option>
                                <option value="SVD">SVD</option>
                                <option value="CS">CS</option>
                                <option value="AD">AD</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Partograph used</label>
                            <select name="partograph" value="{{ $delivery->partograph }}" class="form-control" id="">
                                <option value="{{ $delivery->partograph }}">{{ $delivery->partograph }}</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <h2>Active management of 3rd stage of labor used</h2>
                        
                        <div class="col-6">
                          <div class="form-group">
                            <label>Received oxytocin</label>
                            <select name="oxytocin" value="{{ $delivery->oxytocin }}" class="form-control" id="">
                                <option value="{{ $delivery->oxytocin }}">{{ $delivery->oxytocin }}</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Received misoprostol</label>
                            <select name="misoprostol" value="{{ $delivery->misoprostol }}" class="form-control" id="">
                                <option value="{{ $delivery->misoprostol }}">{{ $delivery->misoprostol }}</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> The Mother <br><span>(please write reason using codes, see key below this page)</span> </h3> <br>
                      
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Alive</label>
                            <input type="text" class="form-control" name="alive" value="{{ $delivery->alive }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Admitted</label>
                            <input type="text" class="form-control" name="admitted" value="{{ $delivery->admitted }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Discharged </label>
                            <input type="text" class="form-control" name="discharged" value="{{ $delivery->discharged }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Referred-out</label>
                            <input type="text" class="form-control" name="referred_out" value="{{ $delivery->referred_out }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Received post abortion care (PAC)</label>
                            <input type="text" class="form-control" name="pac" value="{{ $delivery->pac }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label> Transportation in</label><br>
                            <select name="mother_transportation" value="{{ $delivery->mother_transportation }}" class="form-control" id="">
                                <option value="{{ $delivery->mother_transportation }}">{{ $delivery->mother_transportation }}</option>
                                <option value="vehicle">Vehicle</option>
                                <option value="ambulance">Ambulance</option>
                                <option value="others">Others</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Dead</label>
                            <input type="text" class="form-control" name="dead" value="{{ $delivery->dead }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>MDA conducted </label>
                            <input type="text" class="form-control" name="MDA_conducted" value="{{ $delivery->MDA_conducted }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>MDA not conducted </label>
                            <input type="text" class="form-control" name="MDA_not_conducted" value="{{ $delivery->MDA_not_conducted }}" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->
                
                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> The Baby</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Abortion </label>
                            <input type="text" class="form-control" name="abortion" value="{{ $delivery->abortion }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Time of delivery </label>
                            <input type="text" class="form-control" name="time_of_delivery" value="{{ $delivery->time_of_delivery }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Pre term</label>
                            <input type="text" class="form-control" name="pre_term" value="{{ $delivery->pre_term }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Not breathing/not crying at birth </label>
                            <input type="text" class="form-control" name="breathing" value="{{ $delivery->breathing }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Live birth (write exact weight) </label>
                            <input type="text" class="form-control" name="weight" value="{{ $delivery->weight }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Still birth</label>
                              <select name="still_birth" value="{{ $delivery->still_birth }}" class="form-control" id="">
                                <option value="{{ $delivery->still_birth }}">{{ $delivery->still_birth }}</option>
                                <option value="fresh">Fresh</option>
                                <option value="macerated">Macerated</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Dead </label>
                            <input type="text" class="form-control" name="baby_dead" value="{{ $delivery->baby_dead }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Live births (HIV positive woman only) </label>
                            <input type="text" class="form-control" name="live_births" value="{{ $delivery->live_births }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Sex of baby</label>
                            <select name="baby_sex" value="{{ $delivery->baby_sex }}" class="form-control" id="">
                                <option value="{{ $delivery->baby_sex }}">{{ $delivery->baby_sex }}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Who took delivery of the baby </label>
                            <input type="text" class="form-control" name="took_delivery" value="{{ $delivery->took_delivery }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label> Doctor, midwife or nurse, MLSS trained CHEW and Others </label>
                            <input type="text" class="form-control" name="doctor" value="{{ $delivery->doctor }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Immediate newborn care provided  </label>
                            <input type="text" class="form-control" name="newborn_care" value="{{ $delivery->newborn_care }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Time cord was clamped   </label>
                            <input type="text" class="form-control" name="clamped" value="{{ $delivery->clamped }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Tick if 4% CKX gel is applied to cord at birth  </label>
                            <input type="text" class="form-control" name="CKX_gel" value="{{ $delivery->CKX_gel }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Tick if baby was put to breast </label>
                            <input type="text" class="form-control" name="breast" value="{{ $delivery->breast }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Temperature at 2 hours  </label>
                            <input type="text" class="form-control" name="temperature" value="{{ $delivery->temperature }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Exclusive breastfeeding </label>
                            <select name="breastfeeding" value="{{ $delivery->breastfeeding }}" class="form-control" id="">
                                <option value="{{ $delivery->breastfeeding }}">{{ $delivery->breastfeeding }}</option>
                                <option value="counseled">Counseled</option>
                                <option value="accepted">Accepted</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Postpartum Family planning </label>
                            <select name="postpartum" value="{{ $delivery->postpartum }}" class="form-control" id="">
                                <option value="{{ $delivery->postpartum }}">{{ $delivery->postpartum }}</option>
                                <option value="counseled">Counseled</option>
                                <option value="accepted">Accepted</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Name of person who took delivery </label>
                            <input type="text" class="form-control" name="took_del" value="{{ $delivery->took_del }}" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies --> 
                
                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h3 class="card-title"> Officer Use Only</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <div class="form-group">
                            <label>Name of reporting Officer</label>
                            <input type="text" class="form-control" name="officer" value="{{ $delivery->officer }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation" value="{{ $delivery->designation }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Signation</label>
                            <input type="text" class="form-control" name="signation" value="{{ $delivery->signation }}" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" name="officer_date" value="{{ $delivery->officer_date }}" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('deliveries.index')}}" class="btn btn-sm" role="button"><strong>Exit</strong></a>
                   
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
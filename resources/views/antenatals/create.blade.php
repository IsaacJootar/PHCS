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
              <li class="breadcrumb-item active">Health Health Care Center: Primary Assessment</li>
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
      <form action="{{ route('antenatals.store') }}" method="POST">
      @csrf
        <!-- general form elements (OBSTETRIC SERVICES: Ante Natal Notes) -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">PRIMARY ASSEMENT FOLDER</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Surname </label>
                    <input type="text" class="form-control" name="lname" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Fistname</label>
                    <input type="text" class="form-control" name="fname" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>X-ray No. </label>
                    <input type="text" class="form-control" name="xray" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Unit No.</label>
                    <input type="text" class="form-control" name="unit_no" placeholder="Enter ...">
                  </div>
                </div>
                <!--  -->
                <div class="col-sm-8">
                  <!-- text input -->
                  <div class="form-group">
                    <label>special points</label>
                    <input type="text" class="form-control" name="special_point" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Consultant</label>
                    <input type="text" class="form-control" name="consultant" placeholder="Enter ...">
                  </div>
                </div>
                <!--  -->
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Date of Booking </label>
                    <input type="date" class="form-control" name="dobk" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Indication For Booking</label>
                    <input type="text" class="form-control" name="ifb" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>L M P </label>
                    <input type="text" class="form-control" name="lmp" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>E D D</label>
                    <input type="text" class="form-control" name="edd" placeholder="Enter ...">
                  </div>
                </div>
                <!--  -->

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Address</label><br>
                    <input type="text" class="form-control" name="address" placeholder="">
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Age </label>
                    <input type="text" class="form-control" name="age" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Ethnic Group</label>
                    <input type="text" class="form-control" name="ethnic" placeholder="Enter ...">
                  </div>
                </div>
                <!--  -->

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Occupation</label>
                    <input type="text" class="form-control" name="occupation" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Speaks English</label>
                    <input type="text" class="form-control" name="english" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Literate</label>
                    <input type="text" class="form-control" name="literate" placeholder="Enter ...">
                  </div>
                </div>
                <!--  -->
                <div class="col-sm-12">
                  <h4>Husband Info</h4>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="hname" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Occupation</label>
                    <input type="text" class="form-control" name="hoccupation" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Employer</label>
                    <input type="text" class="form-control" name="hemployer" placeholder="Enter ...">
                  </div>
                  <br> <br>
                </div>

                <!-- end of bio info -->

                <!-- previous med history -->
                <div class="col-sm-6">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Previous Medical History</h3>
                    </div>
                    <br>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Heart Disease</p>
                        </div>
                        <input type="text" name="heartdis" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Chest Disease</p>
                        </div>
                        <input type="text" name="chestdis" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Kidney Disease</p>
                        </div>
                        <input type="text" name="kidneydis" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Blood Transaction</p>
                        </div>
                        <input type="text" name="bloodtrans" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Other (Including Operations)</p>
                        </div>
                        <input type="text" name="otherdis" class="form-control">
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- end previous med history -->

                <!-- Family history -->
                <div class="col-sm-6">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Previous Medical History</h3>
                    </div>
                    <br>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Multiple Pregnancy</p>
                        </div>
                        <input type="text" name="multipreg" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Tubrculosis</p>
                        </div>
                        <input type="text" name="tubrculosis" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Hypertension</p>
                        </div>
                        <input type="text" name="hypertension" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Heart Disease</p>
                        </div>
                        <input type="text" name="heartdis2" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <p type="button" class="btn btn-secondary">Other</p>
                        </div>
                        <input type="text" name="other2" class="form-control">
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>


                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title"> </h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-4">
                          <div class="form-group">
                            <label>Previous Pregnancy</label>
                            <input type="text" class="form-control" name="previouspreg" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Total</label>
                            <input type="text" class="form-control" name="total" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>No. of Living Children</label>
                            <input type="text" class="form-control" name="nolc" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

                <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title"> </h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-2">
                          <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="dob1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label>Duration of Pregnancy</label>
                            <input type="text" class="form-control" name="dop2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Pregnancy, Labour and Puerperium</label>
                            <input type="text" class="form-control" name="plap" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label>birth weight</label>
                            <input type="text" class="form-control" name="bw" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label>Baby NNDD</label>
                            <input type="text" class="form-control" name="nndd" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2">
                          <div class="form-group">
                            <input type="date" class="form-control" name="dob1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="dop3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="plap1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bw1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="nndd1" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <div class="form-group">
                            <input type="date" class="form-control" name="dob2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="dop4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="plap2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bw2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="nndd2" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <div class="form-group">
                            <input type="date" class="form-control" name="dob3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="dop5" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="plap3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bw3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="nndd3" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <div class="form-group">
                            <input type="date" class="form-control" name="dob4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="dop6" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <input type="text" class="form-control" name="plap4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bw4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="nndd4" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->

              </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements  -->


        <div class="col-sm-12">
          <div class="card card-success">
              <div class="card-header">
                  <h3 class="card-title"><br>Assessment: </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
                      <div class="row">
                          <div class="col-sm-8">
                          <h3>History of present Pregnancy</h3>
                              <div class="col-sm-12">
                                  <div class="input-group input-group-sm mb-3">
                                      <div class="input-group-prepend">
                                          <p type="button" class="btn btn-secondary">Bleeding</p>
                                      </div>
                                      <input type="text" name="bleeding" class="form-control">
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                      <p type="button" class="btn btn-secondary">Discharge</p>
                                  </div>
                                  <input type="text" name="discharge" class="form-control">
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                      <p type="button" class="btn btn-secondary">Urinary Symptoms</p>
                                  </div>
                                  <input type="text" name="urinary_sym" class="form-control">
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                      <p type="button" class="btn btn-secondary">Swelling of Ankles</p>
                                  </div>
                                  <input type="text" name="soa" class="form-control">
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                      <p type="button" class="btn btn-secondary">Other Symptoms</p>
                                  </div>
                                  <input type="text" name="other_sym" class="form-control">
                                  </div>
                              </div>
                          </div>

                          <!-- previous Preganacies -->
                          <div class="col-sm-6">
                              <div class="card card-danger">
                              <div class="card-header">
                                  <h3 class="card-title"> Physical  Examination</h3>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                  <div class="col-12"><h4>general Condition</h4></div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Oedema</label>
                                          <input type="text" class="form-control" name="oedema_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Anaemia</label>
                                          <input type="text" class="form-control" name="anaemia_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-12"><h4>Respiratory System</h4></div>
                                      <div class="col-12">
                                          <div class="form-group">
                                          <input type="text" class="form-control" name="respiratory_system_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-12"><h4>Cardiovascular System</h4></div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Spleen</label>
                                          <input type="text" class="form-control" name="Spleen_cs" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>CM</label>
                                          <input type="text" class="form-control" name="cm_cs" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-12"><h4>Abdomen</h4></div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Liver</label>
                                          <input type="text" class="form-control" name="liver_abdomen" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>CM</label>
                                          <input type="text" class="form-control" name="cm_abdomen" placeholder="Enter ...">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                          <!-- end previous Preganacies -->


                          <!-- previous Preganacies -->
                          <div class="col-sm-6">
                              <div class="card card-danger">
                              <div class="card-header">
                                  <h3 class="card-title"> Physical  Examination</h3>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Height</label>
                                          <input type="text" class="form-control" name="height_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Weight</label>
                                          <input type="text" class="form-control" name="weight_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Bp</label>
                                          <input type="text" class="form-control" name="bp_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Urine</label>
                                          <input type="text" class="form-control" name="urine_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Breast & Nipple</label>
                                          <input type="text" class="form-control" name="breast_pe" placeholder="Enter ...">
                                          </div>
                                      </div><div class="col-6">
                                          <div class="form-group">
                                          <label>Hb</label>
                                          <input type="text" class="form-control" name="hb_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Genotype</label>
                                          <input type="text" class="form-control" name="genotype_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>KAHN</label>
                                          <input type="text" class="form-control" name="kahn_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Group RH</label>
                                          <input type="text" class="form-control" name="group_rh_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                          <label>Chest X-ray</label>
                                          <input type="text" class="form-control" name="chest_pe" placeholder="Enter ...">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                          <!-- end previous Preganacies -->
                          
                          <div class="col-12"> <hr> </div> 
                          <div class="col-6">
                              <div class="form-group">
                                  <label>comments</label> <br>
                                  <textarea name="comment"  style="width: 100%;" rows="5"></textarea>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="form-group">
                                  <label>Examiner</label> <br>
                                  <textarea name="examiner" style="width: 100%;" rows="5"></textarea>
                              </div>
                          </div>
                          <div class="col-12"> <hr> </div> 
                          <div class="col-12">
                              <div class="form-group">
                                  <h3>Signature </h3>
                                  <input type="text" class="form-control" name="signature" placeholder="Enter ...">
                              </div>
                          </div>
                          <div class="col-12"> <hr> </div> 
                          <div class="col-12">
                              <div class="form-group">
                                  <label>Special Instruction Rearding Puerperium</label> <br>
                                  <textarea style="width: 100%;" name="sirp" rows="5"></textarea>
                              </div>
                          </div>


                      </div>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
        
        
        <div class="col-sm-12">
          <div class="card card-success">
              <div class="card-header">
                  <h3 class="card-title"><br> CLIP LETTER AND SUMMARIES HERE </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
                      <div class="row">
                                                
                          <div class="col-12"> <hr> </div> 
                          <div class="col-12">
                              <div class="form-group">
                                  <textarea name="clip_letter" id="" style="width: 100%;" rows="5"></textarea>
                              </div>
                          </div>
                          <div class="col-12"> <hr> </div> 
                          
                          <div class="col-12"> <h2>Glue Report of Special Investigation Here</h2> </div> 
                          <div class="col-12">
                              <div class="form-group">
                                  <label>8</label> <br>
                                  <textarea name="field8" id="" style="width: 100%;" rows="2"></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label>7</label> <br>
                                  <textarea name="field7" id="" style="width: 100%;" rows="2"></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label>6</label> <br>
                                  <textarea name="field6" id="" style="width: 100%;" rows="2"></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label>5</label> <br>
                                  <textarea name="field5" id="" style="width: 100%;" rows="2"></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label>4</label> <br>
                                  <textarea name="field4" id="" style="width: 100%;" rows="2"></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label>3</label> <br>
                                  <textarea name="field3" id="" style="width: 100%;" rows="2"></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label>2</label> <br>
                                  <textarea name="field2" id="" style="width: 100%;" rows="2"></textarea>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label>1</label> <br>
                                  <textarea name="field1" id="" style="width: 100%;" rows="2"></textarea>
                              </div>
                          </div>
                          


                      </div>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
        


        <div class="col-sm-12">
          <div class="card card-success">
              <div class="card-header">
                  <h3 class="card-title"><br> Assessment </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-2">
                      <div class="form-group">
                        <label>Hb. Genotype</label>
                        <input type="text" class="form-control" name="hb_ass" placeholder="Action">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="form-group">
                        <label>Chest X-Ray</label>
                        <input type="text" class="form-control" name="chest_ass" placeholder="Action">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="form-group">
                        <label>Rhesus</label>
                        <input type="text" class="form-control" name="rhesus" placeholder="Action">
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="form-group">
                        <label>Kahn</label>
                        <input type="text" class="form-control" name="kahn_ass" placeholder="Action">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label>Anti Malarials & Special Therapy</label>
                        <input type="text" class="form-control" name="anti_malarials_ass" placeholder="Action">
                      </div>
                    </div>
                  </div>

                  <!-- previous Preganacies -->
                <div class="col-sm-12">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title"> Follow Up Assessment </h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-1">
                          <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" name="date_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <label>height of fundus</label>
                            <input type="text" class="form-control" name="fundus_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label>presentation of Postition</label>
                            <input type="text" class="form-control" name="pop_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label>Relation of presenting part to brim</label>
                            <input type="text" class="form-control" name="relation_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <label>Foctal heart</label>
                            <input type="text" class="form-control" name="foctal_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <label>Urine</label>
                            <input type="text" class="form-control" name="urine_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <label>B.P</label>
                            <input type="text" class="form-control" name="bp_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <label>Weight</label>
                            <input type="text" class="form-control" name="weight_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <label>P.V.C</label>
                            <input type="text" class="form-control" name="pvc_ass" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <label>Oedema</label>
                            <input type="text" class="form-control" name="oedema_ass" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                      
                      <!-- ////////////////////////////////////////////////// -->
                      <div class="row">
                        <div class="col-1">
                          <div class="form-group">
                            <input type="date" class="form-control" name="date_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="fundus_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="pop_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="relation_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="foctal_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="urine_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bp_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="weight_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="pvc_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="oedema_ass1" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                      <!-- ////////////////////////////////// -->
                    
                      
                      <!-- ////////////////////////////////////////////////// -->
                      <div class="row">
                        <div class="col-1">
                          <div class="form-group">
                            <input type="date" class="form-control" name="date_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="fundus_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="pop_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="relation_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="foctal_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="urine_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bp_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="weight_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="pvc_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="oedema_ass2" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                      <!-- ////////////////////////////////// -->
                    
                      
                      <!-- ////////////////////////////////////////////////// -->
                      <div class="row">
                        <div class="col-1">
                          <div class="form-group">
                            <input type="date" class="form-control" name="date_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="fundus_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="pop_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="relation_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="foctal_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="urine_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bp_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="weight_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="pvc_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="oedema_ass3" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                      <!-- ////////////////////////////////// -->
                    
                      
                      <!-- ////////////////////////////////////////////////// -->
                      <div class="row">
                        <div class="col-1">
                          <div class="form-group">
                            <input type="date" class="form-control" name="date_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="fundus_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="pop_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="relation_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="foctal_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="urine_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bp_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="weight_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="pvc_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                        <div class="col-1">
                          <div class="form-group">
                            <input type="text" class="form-control" name="oedema_ass4" placeholder="Enter ...">
                          </div>
                        </div>
                      </div>
                      <!-- ////////////////////////////////// -->
                      
                    </div>
                  </div>
                </div>
                <!-- end previous Preganacies -->
              </div>
              <!-- /.card-body -->
          </div>
        </div>

        <div  style="text-align: center" class="card-footer">
          <button type="submit" class="btn btn-primary">Save Record</button>
        </div>

      </form>
    </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
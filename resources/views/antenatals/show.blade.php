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
              <li class="breadcrumb-item active">Primary Health Care Center: Asessment Folder</li>
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
                <h3 class="card-title">Health Facility: Asessment Folder: <label style="color: black">   {{$antenatal->fname . ' '.$antenatal->fname }}</label> </h3><div style="float: right"><a href="{{route('antenatals.index')}}" ><< back</a></div>
              </div>
              </div>
              <!-- /.card-header -->
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
                    <td>Surname </td>
                    <td>{{ $antenatal->lname }} </td>
                  </tr>
                  <tr>
                    <td>Fistname </td>
                    <td>{{ $antenatal->fname }} </td>
                  </tr>
                  <tr>
                    <td>X-ray No. </td>
                    <td>{{ $antenatal->xray }} </td>
                  </tr>
                  <tr>
                    <td>Unit No </td>
                    <td>{{ $antenatal->unit_no }} </td>
                  </tr>
                  <tr>
                    <td>special point </td>
                    <td>{{ $antenatal->special_point }} </td>
                  </tr>
                  <tr>
                    <td>Consultant </td>
                    <td>{{ $antenatal->consultant }} </td>
                  </tr>
                  <tr>
                    <td>Date of Booking </td>
                    <td>{{ $antenatal->dob }} </td>
                  </tr>
                  <tr>
                    <td>Indication For Booking </td>
                    <td>{{ $antenatal->ifb }} </td>
                  </tr>
                  <tr>
                    <td>L M P </td>
                    <td>{{ $antenatal->lmp }} </td>
                  </tr>
                  <tr>
                    <td>E D D </td>
                    <td>{{ $antenatal->edd }} </td>
                  </tr>
                  <tr>
                    <td>Address </td>
                    <td>{{ $antenatal->address }} </td>
                  </tr>
                  <tr>
                    <td>Age </td>
                    <td>{{ $antenatal->age }} </td>
                  </tr>
                  <tr>
                    <td>Ethnic Group </td>
                    <td>{{ $antenatal->ethnic }} </td>
                  </tr>
                  <tr>
                    <td>Occupation </td>
                    <td>{{ $antenatal->occupation }} </td>
                  </tr>
                  <tr>
                    <td>Speaks English </td>
                    <td>{{ $antenatal->english }} </td>
                  </tr>
                  <tr>
                    <td>Literate </td>
                    <td>{{ $antenatal->literate }} </td>
                  </tr>
                  <tr>
                    <td>Name </td>
                    <td>{{ $antenatal->hname }} </td>
                  </tr>
                  <tr>
                    <td>Occupation </td>
                    <td>{{ $antenatal->hoccupation }} </td>
                  </tr>
                  <tr>
                    <td>Employer </td>
                    <td>{{ $antenatal->hemployer }} </td>
                  </tr>
                  <tr>
                    <td>Heart Disease </td>
                    <td>{{ $antenatal->heartdis }} </td>
                  </tr>
                  <tr>
                    <td>Chest Disease </td>
                    <td>{{ $antenatal->chestdis }} </td>
                  </tr>
                  <tr>
                    <td>Kidney Disease </td>
                    <td>{{ $antenatal->kidneydis }} </td>
                  </tr>
                  <tr>
                    <td>Blood Transaction </td>
                    <td>{{ $antenatal->bloodtrans }} </td>
                  </tr>
                  <tr>
                    <td>Other (Including Operations)</td>
                    <td>{{ $antenatal->otherdis }} </td>
                  </tr>
                  <tr>
                    <td>Multiple Pregnancy </td>
                    <td>{{ $antenatal->multipreg }} </td>
                  </tr>
                  <tr>
                    <td>Tubrculosis </td>
                    <td>{{ $antenatal->tubrculosis }} </td>
                  </tr>
                  <tr>
                    <td>Hypertension </td>
                    <td>{{ $antenatal->hypertension }} </td>
                  </tr>
                  <tr>
                    <td>Heart Disease </td>
                    <td>{{ $antenatal->heartdis2 }} </td>
                  </tr>
                  <tr>
                    <td>Other </td>
                    <td>{{ $antenatal->other2 }} </td>
                  </tr>
                  <tr>
                    <td>Previous Pregnancy</td>
                    <td>{{ $antenatal->previouspreg }} </td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>{{ $antenatal->total }} </td>
                  </tr>
                  <tr>
                    <td>No. of Living Children</td>
                    <td>{{ $antenatal->nolc }} </td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>{{ $antenatal->dob1 }} </td>
                  </tr>
                  <tr>
                    <td>Duration of Pregnancy</td>
                    <td>{{ $antenatal->dop2 }} </td>
                  </tr>
                  <tr>
                    <td>Pregnancy, Labour and Puerperium</td>
                    <td>{{ $antenatal->plap }} </td>
                  </tr>
                  <tr>
                    <td>birth weight</td>
                    <td>{{ $antenatal->bw }} </td>
                  </tr>
                  <tr>
                    <td>Baby NNDD</td>
                    <td>{{ $antenatal->nndd }} </td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>{{ $antenatal->dob2 }} </td>
                  </tr>
                  <tr>
                    <td>Duration of Pregnancy</td>
                    <td>{{ $antenatal->dop3 }} </td>
                  </tr>
                  <tr>
                    <td>Pregnancy, Labour and Puerperium</td>
                    <td>{{ $antenatal->plap1 }} </td>
                  </tr>
                  <tr>
                    <td>birth weight</td>
                    <td>{{ $antenatal->bw1 }} </td>
                  </tr>
                  <tr>
                    <td>Baby NNDD</td>
                    <td>{{ $antenatal->nndd1 }} </td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>{{ $antenatal->dob3 }} </td>
                  </tr>
                  <tr>
                    <td>Duration of Pregnancy</td>
                    <td>{{ $antenatal->dop4 }} </td>
                  </tr>
                  <tr>
                    <td>Pregnancy, Labour and Puerperium</td>
                    <td>{{ $antenatal->plap2 }} </td>
                  </tr>
                  <tr>
                    <td>birth weight</td>
                    <td>{{ $antenatal->bw2 }} </td>
                  </tr>
                  <tr>
                    <td>Baby NNDD</td>
                    <td>{{ $antenatal->nndd2 }} </td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>{{ $antenatal->dob4 }} </td>
                  </tr>
                  <tr>
                    <td>Duration of Pregnancy</td>
                    <td>{{ $antenatal->dop5 }} </td>
                  </tr>
                  <tr>
                    <td>Pregnancy, Labour and Puerperium</td>
                    <td>{{ $antenatal->plap3 }} </td>
                  </tr>
                  <tr>
                    <td>birth weight</td>
                    <td>{{ $antenatal->bw3 }} </td>
                  </tr>
                  <tr>
                    <td>Baby NNDD</td>
                    <td>{{ $antenatal->nndd3 }} </td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>{{ $antenatal->dob5 }} </td>
                  </tr>
                  <tr>
                    <td>Duration of Pregnancy</td>
                    <td>{{ $antenatal->dop6 }} </td>
                  </tr>
                  <tr>
                    <td>Pregnancy, Labour and Puerperium</td>
                    <td>{{ $antenatal->plap4 }} </td>
                  </tr>
                  <tr>
                    <td>birth weight</td>
                    <td>{{ $antenatal->bw4 }} </td>
                  </tr>
                  <tr>
                    <td>Baby NNDD</td>
                    <td>{{ $antenatal->nndd4 }} </td>
                  </tr>
                  <tr>
                    <td>Bleeding</td>
                    <td>{{ $antenatal->bleeding }} </td>
                  </tr>
                  <tr>
                    <td>Discharge</td>
                    <td>{{ $antenatal->discharge }} </td>
                  </tr>
                  <tr>
                    <td>Urinary Symptoms</td>
                    <td>{{ $antenatal->urinary_sym }} </td>
                  </tr>
                  <tr>
                    <td>Swelling of Ankles</td>
                    <td>{{ $antenatal->soa }} </td>
                  </tr>
                  <tr>
                    <td>Other Symptoms</td>
                    <td>{{ $antenatal->other_sym }} </td>
                  </tr>
                  <tr>
                    <td>Oedema</td>
                    <td>{{ $antenatal->oedema_pe }} </td>
                  </tr>
                  <tr>
                    <td>Anaemia</td>
                    <td>{{ $antenatal->anaemia_pe }} </td>
                  </tr>
                  <tr>
                    <td>Respiratory System</td>
                    <td>{{ $antenatal->respiratory_system_pe }} </td>
                  </tr>
                  <tr>
                    <td>Spleen</td>
                    <td>{{ $antenatal->Spleen_cs }} </td>
                  </tr>
                  <tr>
                    <td>CM</td>
                    <td>{{ $antenatal->cm_cs }} </td>
                  </tr>
                  <tr>
                    <td>Liver</td>
                    <td>{{ $antenatal->liver_abdomen }} </td>
                  </tr>
                  <tr>
                    <td>CM</td>
                    <td>{{ $antenatal->cm_abdomen }} </td>
                  </tr>
                  <tr>
                    <td>Height</td>
                    <td>{{ $antenatal->height_pe }} </td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>{{ $antenatal->weight_pe }} </td>
                  </tr>
                  <tr>
                    <td>Bp</td>
                    <td>{{ $antenatal->bp_pe }} </td>
                  </tr>
                  <tr>
                    <td>Urine</td>
                    <td>{{ $antenatal->urine_pe }} </td>
                  </tr>
                  <tr>
                    <td>Breast & Nipple</td>
                    <td>{{ $antenatal->breast_pe }} </td>
                  </tr>
                  <tr>
                    <td>Hb</td>
                    <td>{{ $antenatal->hb_pe }} </td>
                  </tr>
                  <tr>
                    <td>Genotype</td>
                    <td>{{ $antenatal->genotype_pe }} </td>
                  </tr>
                  <tr>
                    <td>KAHN</td>
                    <td>{{ $antenatal->kahn_pe }} </td>
                  </tr>
                  <tr>
                    <td>Group RH</td>
                    <td>{{ $antenatal->group_rh_pe }} </td>
                  </tr>
                  <tr>
                    <td>Chest X-ray</td>
                    <td>{{ $antenatal->chest_pe }} </td>
                  </tr>
                  <tr>
                    <td>comments</td>
                    <td>{{ $antenatal->comment }} </td>
                  </tr>
                  <tr>
                    <td>Examiner</td>
                    <td>{{ $antenatal->examiner }} </td>
                  </tr>
                  <tr>
                    <td>Signature</td>
                    <td>{{ $antenatal->signature }} </td>
                  </tr>
                  <tr>
                    <td>Special Instruction Rearding Puerperium</td>
                    <td>{{ $antenatal->sirp }} </td>
                  </tr>
                  <tr>
                    <td>CLIP LETTER AND SUMMARIES HERE</td>
                    <td>{{ $antenatal->clip_letter }} </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>{{ $antenatal->field8 }} </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>{{ $antenatal->field7 }} </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>{{ $antenatal->field6 }} </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>{{ $antenatal->field5 }} </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>{{ $antenatal->field4 }} </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>{{ $antenatal->field3 }} </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>{{ $antenatal->field2 }} </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>{{ $antenatal->field1 }} </td>
                  </tr>
                  <tr>
                    <td>Hb. Genotype</td>
                    <td>{{ $antenatal->hb_ass }} </td>
                  </tr>
                  <tr>
                    <td>Chest X-Ray</td>
                    <td>{{ $antenatal->chest_ass }} </td>
                  </tr>
                  <tr>
                    <td>Rhesus</td>
                    <td>{{ $antenatal->rhesus }} </td>
                  </tr>
                  <tr>
                    <td>Kahn</td>
                    <td>{{ $antenatal->kahn_ass }} </td>
                  </tr>
                  <tr>
                    <td>Anti Malarials & Special Therapy</td>
                    <td>{{ $antenatal->anti_malarials_ass }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $antenatal->date_ass }} </td>
                  </tr>
                  <tr>
                    <td>height of fundus</td>
                    <td>{{ $antenatal->fundus_ass }} </td>
                  </tr>
                  <tr>
                    <td>presentation of Postition</td>
                    <td>{{ $antenatal->pop_ass }} </td>
                  </tr>
                  <tr>
                    <td>Relation of presenting part to brim</td>
                    <td>{{ $antenatal->relation_ass }} </td>
                  </tr>
                  <tr>
                    <td>Foctal heart</td>
                    <td>{{ $antenatal->foctal_ass }} </td>
                  </tr>
                  <tr>
                    <td>Urine</td>
                    <td>{{ $antenatal->urine_ass }} </td>
                  </tr>
                  <tr>
                    <td>B.P</td>
                    <td>{{ $antenatal->bp_ass }} </td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>{{ $antenatal->weight_ass }} </td>
                  </tr>
                  <tr>
                    <td>P.V.C</td>
                    <td>{{ $antenatal->pvc_ass }} </td>
                  </tr>
                  <tr>
                    <td>Oedema</td>
                    <td>{{ $antenatal->oedema_ass }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $antenatal->date_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>height of fundus</td>
                    <td>{{ $antenatal->fundus_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>presentation of Postition</td>
                    <td>{{ $antenatal->pop_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>Relation of presenting part to brim</td>
                    <td>{{ $antenatal->relation_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>Foctal heart</td>
                    <td>{{ $antenatal->foctal_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>Urine</td>
                    <td>{{ $antenatal->urine_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>B.P</td>
                    <td>{{ $antenatal->bp_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>{{ $antenatal->weight_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>P.V.C</td>
                    <td>{{ $antenatal->pvc_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>Oedema</td>
                    <td>{{ $antenatal->oedema_ass1 }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $antenatal->date_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>height of fundus</td>
                    <td>{{ $antenatal->fundus_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>presentation of Postition</td>
                    <td>{{ $antenatal->pop_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>Relation of presenting part to brim</td>
                    <td>{{ $antenatal->relation_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>Foctal heart</td>
                    <td>{{ $antenatal->foctal_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>Urine</td>
                    <td>{{ $antenatal->urine_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>B.P</td>
                    <td>{{ $antenatal->bp_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>{{ $antenatal->weight_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>P.V.C</td>
                    <td>{{ $antenatal->pvc_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>Oedema</td>
                    <td>{{ $antenatal->oedema_ass2 }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $antenatal->date_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>height of fundus</td>
                    <td>{{ $antenatal->fundus_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>presentation of Postition</td>
                    <td>{{ $antenatal->pop_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>Relation of presenting part to brim</td>
                    <td>{{ $antenatal->relation_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>Foctal heart</td>
                    <td>{{ $antenatal->foctal_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>Urine</td>
                    <td>{{ $antenatal->urine_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>B.P</td>
                    <td>{{ $antenatal->bp_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>{{ $antenatal->weight_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>P.V.C</td>
                    <td>{{ $antenatal->pvc_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>Oedema</td>
                    <td>{{ $antenatal->oedema_ass3 }} </td>
                  </tr>
                  <tr>
                    <td>Date</td>
                    <td>{{ $antenatal->date_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>height of fundus</td>
                    <td>{{ $antenatal->fundus_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>presentation of Postition</td>
                    <td>{{ $antenatal->pop_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>Relation of presenting part to brim</td>
                    <td>{{ $antenatal->relation_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>Foctal heart</td>
                    <td>{{ $antenatal->foctal_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>Urine</td>
                    <td>{{ $antenatal->urine_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>B.P</td>
                    <td>{{ $antenatal->bp_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>{{ $antenatal->weight_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>P.V.C</td>
                    <td>{{ $antenatal->pvc_ass4 }} </td>
                  </tr>
                  <tr>
                    <td>P.V.C</td>
                    <td>{{ $antenatal->oedema_ass4 }} </td>
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
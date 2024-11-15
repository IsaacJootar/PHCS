<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antenatal extends Model
{

    protected $fillable = [
        'lname', 'fname', 'fullname', 'xray', 'unit_no', 'special_point', 'consultant', 'dobk', 'ifb', 'lmp', 'edd', 'address', 'age', 'ethnic', 'occupation', 'english', 'literate', 'hname', 'hoccupation', 'hemployer', 'heartdis', 'chestdis', 'kidneydis', 'bloodtrans', 'otherdis', 'multipreg', 'tubrculosis', 'hypertension', 'heartdis2', 'other2', 'previouspreg', 'total', 'nolc', 'dob1', 'dop2', 'plap', 'bw', 'nndd', 'dob1', 'dop3', 'plap1', 'bw1', 'nndd1', 'dob2', 'dop4', 'plap2', 'bw2', 'nndd2', 'dob3', 'dop5', 'plap3', 'bw3', 'nndd3', 'dob4', 'dop6', 'plap4', 'bw4', 'nndd4', 'bleeding', 'discharge', 'urinary_sym', 'soa', 'other_sym', 'oedema_pe', 'anaemia_pe', 'respiratory_system_pe', 'Spleen_cs', 'cm_cs', 'liver_abdomen', 'cm_abdomen', 'height_pe', 'weight_pe', 'bp_pe', 'urine_pe', 'breast_pe', 'hb_pe', 'genotype_pe', 'kahn_pe', 'group_rh_pe', 'chest_pe', 'comment', 'examiner', 'signature', 'sirp', 'clip_letter', 'field8', 'field7', 'field6', 'field5', 'field4', 'field3', 'field2', 'field1', 'hb_ass', 'chest_ass', 'rhesus', 'kahn_ass', 'anti_malarials_ass', 'date_ass', 'fundus_ass', 'pop_ass', 'relation_ass', 'foctal_ass', 'urine_ass', 'bp_ass', 'weight_ass', 'pvc_ass', 'oedema_ass', 'date_ass1', 'fundus_ass1', 'pop_ass1', 'relation_ass1', 'foctal_ass1', 'urine_ass1', 'bp_ass1', 'weight_ass1', 'pvc_ass1', 'oedema_ass1', 'date_ass2', 'fundus_ass2', 'pop_ass2', 'relation_ass2', 'foctal_ass2', 'urine_ass2', 'bp_ass2', 'weight_ass2', 'pvc_ass2', 'oedema_ass2', 'date_ass3', 'fundus_ass3', 'pop_ass3', 'relation_ass3', 'foctal_ass3', 'urine_ass3', 'bp_ass3', 'weight_ass3', 'pvc_ass3', 'oedema_ass3', 'date_ass4', 'fundus_ass4', 'pop_ass4', 'relation_ass4', 'foctal_ass4', 'urine_ass4', 'bp_ass4', 'weight_ass4', 'pvc_ass4', 'oedema_ass4'
    ];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'patient_id','state', 'lga', 'ward', 'name_hf', 'month_year', 'cl_date', 'name_patient', 'cl_sex', 'toc', 'seeking_care', 'transportation', 'parity', 'dodel', 'cl_phone', 'mod', 'partograph', 'oxytocin', 'misoprostol', 'alive', 'admitted', 'discharged', 'referred_out', 'pac', 'mother_transportation', 'dead', 'MDA_conducted', 'MDA_not_conducted', 'abortion', 'time_of_delivery', 'pre_term', 'breathing', 'weight', 'still_birth', 'baby_dead', 'live_births', 'baby_sex', 'took_delivery', 'doctor', 'newborn_care', 'clamped', 'CKX_gel', 'breast', 'temperature', 'breastfeeding', 'postpartum', 'took_del', 'officer', 'designation', 'signation', 'officer_date'
       ];
    use HasFactory;
    public function antenatal(){

        return $this->belongsTo(Antenatal::class, 'patient_id','id'); 
    }
}

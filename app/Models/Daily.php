<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    protected $fillable = [
        'state',  'lga', 'ward', 'name_hf', 'month_year', 'cl_date', 'name_patient', 'dob', 'cl_gender', 'cl_sex', 'cl_age', 'cl_address', 'cl_state', 'cl_phone', 'contact_fac', 'nok_name', 'nok_relation', 'nok_address', 'nok_phone', 'officer', 'designation', 'signation', 'officer_date',
    ];

    use HasFactory;

    public function antenatal() {
        return $this->belongsTo(Antenatal::class,'patient_id','id');
}

}

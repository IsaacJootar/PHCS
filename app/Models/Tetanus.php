<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tetanus extends Model
{
    protected $table="tetanus";
    protected $fillable = [
        'patient_id', 'state', 'lga', 'ward', 'name_hf', 'dov', 'f_type', 'card_no', 'cl_dob', 'cl_name', 'cl_adress', 'cl_phone', 'officer', 'designation', 'ho_unit', 'sign',
    ];

    use HasFactory;

    public function antenatal(){

        return $this->belongsTo(Antenatal::class, 'patient_id','id'); 
    }
}

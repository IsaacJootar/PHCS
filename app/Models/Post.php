<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="post_natal";
    protected $fillable = [
        'patient_id','state', 'lga', 'ward', 'name_hf', 'month_year', 'patient_n', 'patient_f', 'range', 'age', 'parity', 'cl_attend', 'assos_prob', 'post_mother', 'post_child', 'sex_child', 'nutri', 'breast', 'feeding', 'planning', 'fgm', 'vagina', 'pcv', 'urine','new_born', 'kmc', 'visit','officer', 'designation', 'sign',
    ];

    use HasFactory;

    public function antenatal(){

        return $this->belongsTo(Antenatal::class, 'patient_id','id');  
    }
}

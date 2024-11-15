<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table="notes";
    protected $fillable = [
        'patient_id','dov', 'section', 'phone', 'note', 'officer', 'designation',
    ];

    use HasFactory;

    public function antenatal(){

        return $this->belongsTo(Antenatal::class, 'patient_id','id');  
    }
}

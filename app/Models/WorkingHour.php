<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkingHour extends Model
{
    use HasFactory;

    protected $table = 'working_hour';

    protected $fillable = ['doctor_id','day_index','period_list','status'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}

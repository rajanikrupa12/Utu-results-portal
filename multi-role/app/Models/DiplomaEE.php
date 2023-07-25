<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomaEE extends Model
{
    use HasFactory;

    protected $fillable = [
        'enrollment_no','photo','student','date_of_birth','gender','student_moblie','email','last_degree_name','last_degree_per','last_college_name','permanent_address','local_address','sms_no','phone_number','father_name','father_moblie','mother_name','mother_number','guardian_name','guardian_moblie','admission_date','cast','sub_cast','blood_group',
    ];
    protected $table="diploma_e_e_s";
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];
}

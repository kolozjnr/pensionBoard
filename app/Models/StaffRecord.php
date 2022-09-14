<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class StaffRecord extends Model
{
    use HasFactory, Uuid;

    
      /**
     * uuid setup
     * 
     */
    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['staff_id','fname','mname','lname','email','tel','dob','state','lga','address','place_of_work','basic_salary','rent_allowance','ultility_allowance','transport_allowance','date_employed','date_retired','start_level','start_step','status','total_enrollment','nok_name','nok_tel','nok_address','nok_relationship','user_email'];
}

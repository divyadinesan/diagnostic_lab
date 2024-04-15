<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    
  protected $table='patients';
    protected $fillable=['p_name','p_email','p_phone','p_password','p_address'];
    protected $primaryKey = 'patient_id';

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
     protected $table='bookings';
    protected $fillable=['test_id','patient_id','patient_email','patient_name','test_name','test_price','booking_date','booking_time','booking_status'];
     protected $primaryKey = 'booking_id';
}

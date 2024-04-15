<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
	 protected $table='payments';
    protected $fillable=['booking_id','test_id','test_name','patient_id','price','card_name','card_number','cvc','expiry_date'];
    protected $primaryKey = 'payment_id';
    use HasFactory;
}

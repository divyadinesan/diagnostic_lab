<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab extends Model
{
    use HasFactory;
    protected $table='labs';
    protected $fillable=['lab_name','lab_email','lab_phone','lab_password','lab_address'];
     protected $primaryKey = 'lab_id';
}

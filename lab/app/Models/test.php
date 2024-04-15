<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    protected $table='tests';
    protected $fillable=['category_id','test_name','test_price','test_description','test_image'];
    protected $primaryKey = 'test_id';
}

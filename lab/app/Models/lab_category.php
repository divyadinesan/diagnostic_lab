<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_category extends Model
{
    use HasFactory;
         protected $table='lab_categories';
    protected $fillable=['category_name','category_image'];
    protected $primaryKey = 'category_id';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
'manufacturer',
'make',
'model',
'description',
'price',
'price_range',
 ];

}

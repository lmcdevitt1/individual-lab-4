<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [

        'manufacturer',
        'make',
        'model',
        'price',
        'price_range',

    ];

    public function toString(): string
    {
        return  
"Manufacturer: {$this->manufacturer},       
          Make: {$this->make},
           Model: {$this->model},
            Price: {$this->price},
             Price Range: {$this->price_range}";

    }
}

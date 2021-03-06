<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'product_name',
        'product_desc',
        'registration_number',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
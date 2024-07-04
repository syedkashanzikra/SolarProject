<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pro_Name',
        'Pro_Price',
        'Pro_Url',
        'Pro_Decs',
        'Pro_Image'
    ];
}

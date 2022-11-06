<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // Connect with Table
    protected $table = 'brands';

    protected $fillable = [
        'name',
        'slug',
        'status',
    ];
}

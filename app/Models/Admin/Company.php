<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // protected $guaraded = [];

    protected $fillable = [
        'name',
        'description',
        'address',
        'email',
        'location'
    ];
}

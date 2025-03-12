<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imporate extends Model
{
    /** @use HasFactory<\Database\Factories\ImporateFactory> */
    use HasFactory;
    protected $table = 'imporates';
    protected $guarded = [];
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    protected $fillable=[
        'company_name', 'website', 'email', 'phone', 'location', 'company_dec'

    ];
}

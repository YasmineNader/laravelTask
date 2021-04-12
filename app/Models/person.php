<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    // use HasFactory;


protected $table="person";
protected $fillable=['name','age','phone','nationalid','password','address','aboutme'];
protected $hidden=['created_at','updated_at	'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function setNameAttribute($value){
        $this->attributes['name']= 'Md '.$value;
    }
    public function setAddressAttribute($value){
        $this->attributes['address']= $value.' Bangladesh';
    }
}

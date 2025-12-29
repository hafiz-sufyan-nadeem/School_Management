<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','dob','class_id'];

    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}

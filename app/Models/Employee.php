<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'emp_name',
        'emp_contact',
        'emp_address',
        'emp_dob',
        'emp_email'
    ];

}

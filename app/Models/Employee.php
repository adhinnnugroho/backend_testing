<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employee";
    protected $fillable = ['position_id', 'home_town_id', 'name_employee', 'date_of_birth'];
}

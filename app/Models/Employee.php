<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employee";
    protected $fillable = ['position_id', 'home_town_id', 'name_employee', 'date_of_birth'];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function hometown()
    {
        return $this->belongsTo(Hometown::class, 'home_town_id');
    }
}

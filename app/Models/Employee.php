<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function designation(){
        return $this->belongsTo(Designation::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function salary_structure()
    {
        return $this->belongsTo(Salary_structure::class);
    }
}

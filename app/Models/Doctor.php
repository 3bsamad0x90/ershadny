<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'image',
        'specialization_id',
        'department_id',
    ];

    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
}

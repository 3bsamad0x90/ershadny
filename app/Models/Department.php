<?php

namespace App\Models;

use App\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'specialization_id'
    ];
    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }
}

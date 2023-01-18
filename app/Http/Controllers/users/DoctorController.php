<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        // $doctors = Doctor::all();
        $doctors = Doctor::with('specialization', 'department')->get();
        return view('doctors.index', compact('doctors'));
    }

    public function details(Doctor $doctor){
        return view('doctors.details', compact('doctor'));
    }
}

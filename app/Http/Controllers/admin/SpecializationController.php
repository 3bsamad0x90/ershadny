<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function index(){
        return view('adminPanel.specializations.index',[
            'title' => 'التخصصات',
            'active' => 'specializations'
        ]);
    }
}

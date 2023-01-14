<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('AdminPanel.departments.index',[
            'title' => 'الأقسام',
            'active' => 'departments'
        ]);
    }
}

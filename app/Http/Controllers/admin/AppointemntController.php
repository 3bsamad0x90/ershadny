<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointemntController extends Controller
{
    public function index(){
        return view('AdminPanel.appointemnts.index',[
            'title' => 'المواعيد',
            'active' => 'appointemnts'
        ]);
    }
}

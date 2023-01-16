<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Specialization;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        $specializations = Specialization::all();
        return view('AdminPanel.departments.index',[
            'title' => 'الأقسام',
            'active' => 'departments'
        ],compact('departments','specializations'));
    }
    public function store(Request $request){
        $item = Department::where('specialization_id',$request->specialization_id)->where('name',$request->name)->first();
        if($item){
            return redirect()->back()->with('error','هذا القسم موجود مع هذا التخصص بالفعل');
        }
        $validator = $request->validate([
            'name' => 'required',
            'specialization_id' => 'required'
        ],[
            'name.required' => 'يجب ادخال اسم القسم',
            'name.unique' => 'هذا القسم موجود بالفعل',
            'specialization_id.required' => 'يجب اختيار التخصص'
        ]);
        if(!$validator){
            return redirect()->back()->withErrors($validator, 'name');
        }else{
            $data = Department::create($request->all());
            if($data){
                return redirect()->route('admin.departments')->with('success','تمت الاضافة بنجاح');
            }else{
                return redirect()->route('admin.departments')->with('error','حدث خطأ ما');
            }
        }
    }
    public function destroy($id){
        $item = Department::findOrfail($id);
        if($item){
            $item->delete();
            return redirect()->route('admin.departments')->with('success','تم الحذف بنجاح');
        }else{
            return redirect()->route('admin.departments')->with('error','حدث خطأ ما');
        }
    }
}

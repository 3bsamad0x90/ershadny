<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Validator;
class SpecializationController extends Controller
{
    public function index(){
        $specializations = Specialization::all();
        return view('adminPanel.specializations.index',[
            'title' => 'التخصصات',
            'active' => 'specializations'
        ],compact('specializations'));
    }
    public function store(Request $request){
        $validator = $request->validate([
            'name' => 'required|unique:specializations,name'
        ],[
            'name.required' => 'إسم التخصص مطلوب لا يمكن تركه فارغا',
            'name.unique' => 'هذا التخصص موجود بالفعل'
        ]);
        if(!$validator){
            return redirect()->back()->withErrors($validator, 'name');
        }else{
            $specialization = new Specialization();
            $specialization->name = $request->name;
            $specialization->save();
            return redirect()->route('admin.specializations')->with('success','تمت الاضافة بنجاح');
        }
    }
    public function destroy($id){
        $specialization = Specialization::findOrFail($id);
        if($specialization){
            $specialization->delete();
            return redirect()->route('admin.specializations')->with('success','تم الحذف بنجاح');
        }else{
            return redirect()->route('admin.specializations')->withErrors('error','حدث خطأ ما');
        }
    }

}

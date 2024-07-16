<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){





        return view('admin.adminLogin');
    }



public function adminLogin(request $request){


$data=$request->validate(['adminEmail'=>'required|email|exists:admins,adminEmail',
'password'=>'required|string'
]);

if (auth::guard('admin')->attempt($data)) {
    $request->session()->regenerate();

    return redirect('admin/adminPage');
}else {
    return back()->withErrors('Error','password is invalid');
}

}






public function adminIndex(){
    return view('admin.adminPage');
}

public function adminCreate(request $request){


$data=$request->validate(['attachment'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
'title'=>'required|string',
'price'=>'required|string',
'url'=>'required|string'



]);

$adminId=auth::guard('admin')->user();


$data['admin_id']=$adminId['id'];


if($request->file('attachment')){

    $attachment=$request->file('attachment');
    $path= $attachment->move('attachments',time().".".$attachment->extension());
    $data['attachment']=$path;
}

Course::create($data);

return back()->with('success','the post has been created successfully');

}



public function adminUpdateIndex(){

    $courses=Course::all();
    return view('admin.adminUpdate',compact('courses'));
}




public function adminEditIndex($id){

$courses=Course::find($id);
return view('admin.update')->with(['courses'=>$courses]);



}


public function adminEdit(request $request, $id){

$admin=auth::guard('admin')->user();

$data=$request->validate(['attachment'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
'title'=>'required|string',
'price'=>'required|string',
'url'=>'required|string'



]);



if ($request->file('attachment')) {
    $attachment=$request->file('attachment');

    $path=$attachment->move('attachments',time().".".$attachment->extension());

    $data['attachment']=$path;
}



$data['admin_id']=$admin->id;


Course::find($id)->update($data);


return back()->with('success','course has been updated successfully');



}


public function adminDelete($id){


    $course=Course::find($id);
    $course->delete();

    return back();
}


}

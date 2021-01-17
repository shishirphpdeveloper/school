<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Validator;
use DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;






class UserController extends Controller
{
    public function aboutus(){
		return view('aboutus');
    }

    public function contactus(){
    	return view('contactus');
    }

    public function userregister(){
    	return view('userregister');
    }

    public function userlogin(){
    	return view('userlogin');
    }

    public function changepassword(){
        return view('changepassword');
    }


    public function updatepassword(Request $request){
        
        $rules=[
            'oldpassword'=>'required',
            'newpassword'=>'required',
            'cannewpassword'=>'same:newpassword'
        ];

        $custom=[
            'oldpassword.required'=>'Old password must be fillout',
            'newpassword.required'=>'New password must be fillout',
            'cannewpassword.same'=>'Confirm Password does not match'
        ];

        $validate=Validator::make($request->all(),$rules,$custom);

        if($validate->fails()){
            return redirect('changepassword')->withErrors($validate);
        }
        else
        {
            $check=Hash::check($request->oldpassword,auth()->user()->password);
            if($check)
            {
                $user=User::find(auth()->user()->id);
                $user->update(['password'=>Hash::make($request->newpassword)]);
                return redirect('changepassword')->with('msg','Password Successfully Update');
            }
            else
            {
                return redirect('changepassword')->with('msg','You have entered Wrong Password');
            }

        }

    }

    public function editstudent($id){
        $record=Student::find($id);
        return view('editstudent',['record'=>$record]);
    }

    public function updatestudent(Request $request,$id){
        $row=Student::find($id);
        $data=$request->except('_method','_token');
        $row->update($data);
        return redirect('viewstudent')->with('msg','Record Updated');


    }

    

    public function deletestudent($id){
        Student::destroy($id);
        return redirect()->back()->with('msg','Record Deleted');
    }

    public function viewstudent(){
        $student_records=DB::table('students')
        ->where('user_id',Auth::user()->id)
        ->orderby('name')
        ->paginate(10);
        return view('fetchstudents',['student_records'=>$student_records]);
    }
   


    public function addstudent(Request $request){
        
        $rules=[
                'name'=>'required',
                'email'=>'required|email',
                'phone'=>'required|numeric|min:10'
        ];

        $custom_messages=[
            'name.required'=>'Name must be fill out',
            'email.required'=>'Email must be fill out',
            'email.email'=>'Enter Valid Email',
            'phone.required'=>'Phone must be fill out'

        ];

        $validate=Validator::make($request->all(),$rules,$custom_messages);

        if($validate->fails())
        {
            return redirect('home')->withErrors($validate)->withInput();
        }

        $stu_object=new Student;

        if($request->hasFile('photo'))
        {
            $file=$request->file('photo');
            $destinationpath="public/profilephoto";
            $filename=time().$file->getClientOriginalName();
            $file->storeAs($destinationpath,$filename);
            $stu_object->photo=$filename;

        }

        
        $stu_object->user_id=auth()->user()->id;
        $stu_object->name=$request->name;
        $stu_object->email=$request->email;
        $stu_object->phone=$request->phone;
        $stu_object->address=$request->address;
        $stu_object->class=$request->class;
        $stu_object->save();
        return redirect()->back()->with('msg','Student Successfully Added');
    }
    

}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function profile(){
        //check if data about students exist or not
        if(User::where([['id',Auth::id()],['isTeacher',TRUE]])->exists()){
            return redirect()->route('admin.dashboard');
        }

        if(Student::where('user_id',Auth::id())->doesntExist()){
            return redirect()->route('apply');
        }
        $data['student'] = Student::where('user_id',Auth::id())->first();
        return view('homepage.profile',$data);
    }

    public function apply(){
        if(Student::where('user_id',Auth::id())->exists()){
            return redirect()->route('profile');
        }
            return view('homepage.apply');
    }
    public function applyStore(Request $request){
        if(Student::where('user_id',Auth::id())->exists()){
            return redirect()->route('apply');
        }

        $request->validate([
            "contact"=>'required',
            "nationality"=>'required',
            "dob"=>'required|date',
            "gender"=>'required',
            "school"=>'required',
            "dp"=>'required|mimes:jpg,png',
        ]);
        $filename = time(). ".".$request->dp->extension();
        $request->dp->move(public_path('images'),$filename);
        Student::create([
            'contact'=>$request->contact,
            'dob'=>$request->dob,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'gender'=>$request->gender,
            'nationality'=>$request->nationality,
            'nationality'=>$request->nationality,
            'school'=>$request->school,
            'school'=>$request->school,
            'dp'=>$filename,
            'user_id'=>Auth::id(),
        ]);
        return redirect()->route('profile');
    }
}

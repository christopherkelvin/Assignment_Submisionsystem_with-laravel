<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\course;
use App\Models\assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    //
     public function index()
    {
        return view('indext',[ 'courses'=> course::paginate(10)]);
    }
    public function addview()
    {
        return view('addcourse');
    }
    public function uploadview(Request $request)
    {
        // dd($request->query('id'));
        return view('upload',[ 'id' => $request->query('id')]);
    }
    public function upload(Request $request)
    {
        $Assignment= $request->validate([
            'assignmentHeading'=>['required','min:4'],
            'Assignment'=>['required','file'],
            'submisionDate'=>['required'],
            'submisionTime'=>['required'],
        ]);
        $file= $request->file('Assignment');
        $file_Name= $request->assignmentHeading.time().'.'.$file->getClientOriginalExtension();
        $request->Assignment->move('Assignment_folder',$file_Name);
        if($Assignment){
            assignment::create([
                'User_id'=>Auth::user()->id,
                'Course_id'=>$request->Course_id,
                'Heading'=>$request->assignmentHeading,
                'SubmisionDate'=>$request->submisionDate,
                'SubmisionTime'=>$request->submisionTime,
                'Assignment'=> $file_Name
            ]);
            return redirect("/")->with('message','Assignment uploaded successfully');
        }
    }
    public function course()
    {
        return view('courses',['courses'=> course::paginate(10)]);
    }
    public function take($id)
    {
        dd($id);
        DB::table('courses')->insert(['Teacher_id'=>$id]);
        return redirect('/teacher/course')->with('message','Assigned to you successfully');
    }
    public function add(Request $request)
    {
       $Coursefield=$request->validate(
            [

                'courseName'=>['required','min:3'],
                'course_code'=>['required','min:3', 'unique:'.course::class],
                // 'courseTeacher'=>['required','min:3'],
                'yearTaught'=>['required','numeric'],
                'programName'=>['required','min:3'],
            ]
        );
        // dd($Coursefield);

        if($Coursefield){
            course::create([
                'Course_name'=>$request->courseName,
                'Course_code'=>$request->course_code,
                // 'Course_teacher'=>$request->courseTeacher,
                'Year_tought'=>$request->yearTaught,
                'Program_name'=>$request->programName,
            ]);
            return redirect('/teacher/addcourse')->with(['message' =>'course added successfully']);
        }

    }

}

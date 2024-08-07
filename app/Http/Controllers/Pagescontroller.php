<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\course;
use App\Models\assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagescontroller extends Controller
{
    //
    public function index()
    {
        $courses =course::paginate(10);
        return view('index',['courses'=>$courses]);
    }
    public function details()
    {
        return view('details');
    }
    public function course($id)
    {
        $ass=DB::table('assignments')->where('Course_id', $id)->paginate(3);
        return view('course',
                    ['courses'=> course::find($id),
                     'Assignments'=>$ass,
                     'Users'=>user::all()]
                    );
    }
    // public function viewCourse($id){
    //     return view('viewCourse', [
    //         'courses'=>course::find($id)
    //     ]);
    // }
    public function submit()
    {
        return view('submit');
    }
    public function update($id){
        return view('update',['user'=>User::find($id)]);
    }
    public function modify(Request $request){
        // dd($request);
        $field= $request->validate([
            'registration'=>['required','max:255'],
            'name' => ['required', 'string','min:3', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);
        User::find($request->id)->update($field);
        return redirect()->back()->with('message','Details updated');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Students::all();
        return view('student.index', [
            'students'=>$students
        ]);
    }
    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $request->validate([
            'fullname' => 'required',
            'birthday' => 'required',
            'address' => 'required'
        ]);

        $students = Students::create([
            'fullname' => $request->input('fullname'),
            'birthday' => $request->input('birthday'),
            'address' => $request->input('address'),
        ]);

        $students->save();  

        return redirect('/students');
    }

    public function edit($id){
        // dd($id);
        $student = Students::find($id);

        return  view('student.edit')->with('student', $student);
    }
    public function update(Request $request, $id){

        $request->validate([
            'fullname' => 'required',
            'birthday' => 'required',
            'address' => 'required'
        ]);
        $food = Students::where('id', $id)
                ->update([
                    'fullname' => $request->input('fullname'),
                    'birthday' => $request->input('birthday'),
                    'address' => $request->input('address'),
                ]);
        return redirect('/students');
    }
    public function destroy($id){

        $student = Students::find($id);
        $student->delete();
        return redirect('/students');
    }
}

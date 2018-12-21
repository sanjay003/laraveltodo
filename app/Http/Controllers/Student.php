<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Students;
class Student extends Controller
{
 public function index(){
   //Retrive The value for Model
 $student =Students::all();
 return view('pages.list',compact('student'));
}
//Now I am going ro create public function to add data into insert table;
 public function create(){
 	return view('pages.add');
 }

public function add(Request $request){
 $students=new Students();
 $students->name=$request->name;
 $students->marks=$request->mark;
 $students->save();
 return view('pages.list');
}

//Now I am Going to Edit student mark and Then i will be update
public function edit($id)
{
     $task =Students::find($id);

    return view('pages.edit')->withTask($task);
}
//Here I am going to update data 
 public function update(Request $request,$id){
 $students=Students::find($id);
 $students->name=$request->name;
 $students->marks=$request->mark;
 $students->save();
 return redirect()->route('student.list')
                        ->with('success', 'User updated successfully');
}

 //here is public  Delete function is running on
  public function Delete($id){
        $students=Students::find($id);
        $students->delete();
         return redirect()->route('student.list')
                        ->with('success', 'User updated successfully');

 }
}

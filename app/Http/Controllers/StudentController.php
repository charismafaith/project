<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentType;
use App\Student;

class StudentController extends Controller
{
    
    public function create_student()
    {
        return view('add_student');
    }

    public function add_student(Request $request)
    {
        $this->validate( $request,[
            'name' => 'required',
        ]);

        $student = new StudentType;
        $student->name = $request->name;
        $student->save();

        return redirect('/')->withSucces('Successfully save');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students = Student::all();

        return view('index',compact('students'))->with('i');
 
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $student_types = StudentType::all();

        return view('create',compact('student_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request,[
            'student_number' => 'required',
            'EnrolledDate' => 'required',
            'Prelim' => 'required',
            'Midterm' => 'required',
            'SemiFinal' => 'required',
            'Final' => 'required',
                 
        ]);

        $student = new Student;
        $student->student_type_id = $request->student_type_id;
        $student->student_number = $request->student_number;
        $student->EnrolledDate = $request->EnrolledDate;

        $student->Prelim = $request->Prelim;
        $student->Midterm  = $request->Midterm;
        $student->SemiFinal  = $request->SemiFinal;
        $student->Final = $request->Final;
    
    
           $student->Tuition = $student->Prelim + $student->Midterm + $student->SemiFinal + $student->Final;

        
            $student->Status = "Not Paid";
            $student->save();
    
            return redirect('/')->withSucces('Successfully save');
         
       
    }
    public function status(Request $request){
        $student = Student::find($request->id);
        
        if($student){
            $student->EnrolledDate;
            $student->Prelim = 0;
            $student->Midterm = 0;
            $student->SemiFinal = 0;
            $student->Final = 0;
            $student->Tuition = 0;
            $student->Status = "Paid";

            $student->save();
            return redirect('/')->withSucces('Successfully save');

     

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        
        $student_types = StudentType::all();
        

        

        return view('edit',compact('student','student_types'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( $request,[
            'student_number' => 'required',
            'EnrolledDate' => 'required',
            'Prelim' => 'required',
            'Midterm' => 'required',
            'SemiFinal' => 'required',
            'Final' => 'required',
            
        ]);

        $student = Student::find($id);
        $student->student_type_id = $request->student_type_id;
        $student->student_number = $request->student_number;
        $student->EnrolledDate =$request->EnrolledDate;
   
        $student->Prelim = $request->Prelim;
        $student->Midterm  = $request->Midterm;
        $student->SemiFinal  = $request->SemiFinal;
        $student->Final = $request->Final;
        $student->Status="Not paid";
    
           $student->Tuition = $student->Prelim + $student->Midterm + $student->SemiFinal + $student->Final;


           if($student->Tuition  == true ){
            }else($student->Status = " paid");
        {
           
                

           
        
        }
           
           
           
            
        
        
        
        $student->save();
        return redirect('/')->withSucces('Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();

        return redirect('/')->with('status','Your data is deleted');
    }
}



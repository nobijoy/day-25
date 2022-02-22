<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $name ;
    protected $city ;
    protected $students ;
    protected $student ;

    public function index(){
      $this->student = new Student();
      $this->student->newStudent();
      return 'success';

//        return view('all', ['students'=>$this->students]);

//        return view('all')->with([
//            'data'= $this->name,
//            'rafa'=>$this->city
//        ]);
//        return view('all', compact('data','rafa'));
    }
}

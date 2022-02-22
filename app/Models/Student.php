<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;
    public function newStudent(){
        $this->student= new Student();
        $this->student->name ='Riaz';
        $this->student->email ='nbdj@gmail.com';
        $this->student->mobile ='01246555855';
        $this->student->save();
    }

    public static function getAllStudent(){

        return[
          0 =>[
              'id'=>1,
              'name'=> 'Alamin',
              'email'=> 'mda20202@gmail.com',
              'mobile' => '017151414104',
              'image' => ''
          ],
          1=>[
                'id'=>1,
                'name'=> 'joy',
                'email'=> 'nobijoy1446@gmail.com',
                'mobile' => '017846253645',
                'image' => ''
            ],
          2=>[
                'id'=>1,
                'name'=> 'sumon',
                'email'=> 'sumonful@gmail.com',
                'mobile' => '016255452215',
                'image' => ''
            ],
        ];
    }
}

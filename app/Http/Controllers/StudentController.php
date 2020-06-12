<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;

    public function __construct() {
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }
    //homepage
    public function index(){

        $data = [
            'students' => $this->students,
            'genders' => $this->genders,
        ];

        return view('students.index', $data);
    }
    //homepage
    public function show($slug){
        
        $student = $this->searchStudent($slug, $this->students);
        if(! $student) {
            abort('404');
        }

        return view('students.show', compact('student'));
    }
    /**
     * UTILITIES
     */

     //check if students id exists

     private function searchStudent($slug, $array) {
        foreach ($array as $student) {
            if ($student['slug'] == $slug) {
                return $student;
            }
        }
        return false;
     }
}



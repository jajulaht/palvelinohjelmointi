<?php

namespace App\Http\Controllers;
use App\Student;
use App\Course;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
//use Request;

class StudentController extends Controller
{

    public function studentjson() {
        $students = Student::all();
        // return $students;
        return Response::json($students, 200, array(), JSON_PRETTY_PRINT);
    }

    public function coursejson() {
        $courses = Course::all();
        // return $courses;
        return Response::json($courses, 200, array(), JSON_PRETTY_PRINT);
    }

    // Metodi opiskelijoiden listaamiseksi
    public function studentlist() {
        $students = Student::all();
        return view('students')->with('students', $students);
    }

    // Metodi kurssien listaamiseksi
    public function courselist() {
        $courses = Course::all();
        return view('courses')->with('courses', $courses);
    }

    public function studentincourses() {
        $student = Student::find(1); // Haetaan opiskelijan id=1 tiedot
        // return $student->courses; // Kokeile ensin, että tämä palautus toimii
        return view('studentincourses')->with('studentincourses', $student->courses);
    }

    public function studentcredits(Request $request)
    {
    $id = $request->input('id'); // $_GET['id'] phpssä

    $studentcredits = DB::table('student')
    ->select('student.id',
              DB::raw("student.lastname AS Sukunimi"),
              DB::raw("student.firstname AS Etunimi"),
              DB::raw("course.name as Kurssi"),
              'course.credits',
              'accepted_course.created_at'
              )
    ->join('accepted_course', 'student.id', '=', 'accepted_course.student_id')
    ->join('course', 'course.id', '=', 'accepted_course.course_id')              
    ->where('student.id','=',"$id")             
	->orderBy('course.credits', 'desc')
    ->get();

    // return $studentcredits; // Kokeile ensin, että tämä palautus toimii
    return view('studentcredits')->with('studentcredits', $studentcredits);
    }

    public function studentform() {
        return view('studentform');

    }

    public function store(Request $request) {
        Student::create($request->all());
        return redirect('/student');  
    }

}
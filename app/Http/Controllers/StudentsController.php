<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function enterAttempts(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('attempts', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageGrade($grade1, $grade2, $grade3, $grade4, $grade5)
    {
        $average = ($grade1 + $grade2 + $grade3 + $grade4 + $grade5) / 5;
        return round($average, 2);
    }

    public function computePower(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        $s1_average = $this->computeAverageScore($request->s1_attempt1, $request->s1_attempt2, $request->s1_attempt3);
        $s2_average = $this->computeAverageScore($request->s2_attempt1, $request->s2_attempt2, $request->s2_attempt3);
        $s3_average = $this->computeAverageScore($request->s3_attempt1, $request->s3_attempt2, $request->s3_attempt3);
        

    
        
    }
}

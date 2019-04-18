<?php

namespace App\Http\Controllers;

use App\Groupe;
use App\Student;
use App\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentSearch = "";
        $students = Student::all();
        return view('students.index', compact(['students', 'studentSearch']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'student_number' => 'required|numeric',
            'name' => 'required|max:191',
            'insertion' => 'max:191',
            'last_name' => 'required|max:191',
        ]);

        Student::create($input);

        return redirect(route('student.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::all();
        $studentSearch = $id;
        return view('students.index', compact(['students','studentSearch']));
    }

    public function detail($id)
    {
        $student = Student::findOrFail($id);
        $totalAssignmentsDone = 0;
        $endGrade = 0;
        $grade = 0;
        if (isset($student->classe[0]->name)) {
            $class = $student->classe[0]->name;
        } else {
            $class = "niet in een klas";
        }
        foreach ($student->groupe as $groupe) {
            if ($groupe->grade == 0) {
                $doingAssignment = "Bezig";
            } else {
                $grade = $grade + $groupe->grade;
                $totalAssignmentsDone++;
                $doingAssignment = "Niet bezig";
            }
        }
        if ($totalAssignmentsDone > 0){
            $endGrade = $grade/$totalAssignmentsDone;
        }

        $groupes = $student->groupe;

        return view('students.show', compact(['student', 'totalAssignmentsDone', 'class', 'endGrade', 'grade', 'doingAssignment', 'groupes']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.update', compact(['student']));
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
        $input = $request->validate([
            'student_number' => 'required|numeric',
            'name' => 'required|max:191',
            'insertion' => 'max:191',
            'last_name' => 'required|max:191',
        ]);

        $student = Student::findOrFail($id);
        $student->update($input);

        return redirect(route('student.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect(route('student.index'));
    }

    public function searchStudent($name)
    {
        $students = Student::where('name', 'like', '%'.$name.'%')->get();
        return $students;
    }

    public function searchStudentById($id)
    {
        return Student::find($id);
    }
}

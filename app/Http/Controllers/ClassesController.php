<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Classe;
use App\Groupe;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bestAssignmentThisMonth = Groupe::whereMonth('startDate', '=', date('m'))->where('grade', '!=' , 0)->orderBy('startDate', 'desc')->first();
        $latestAssignmentDone = Groupe::where('grade', '!=' , 0)->orderBy('id', 'desc')->first();
        $bestAssignments = Groupe::whereMonth('startDate', '=', date('m'))->where('grade', '!=' , 0)->orderBy('grade', 'desc')->first();
        $classes = Classe::all();
        return view('classes.index', compact(['classes', 'bestAssignmentThisMonth', 'latestAssignmentDone', 'bestAssignments']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classes.create');
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
            'name' => 'required|max:191',
        ]);

        Classe::create($input);

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classe::findOrFail($id);
        $students = $class->student;
        return view('classes.show', compact(['class', 'students']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classe::findOrFail($id);
        $students = $class->student;
        return view('classes.update', compact(['class', 'students']));
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
            'name' => 'required|max:191',
            'studentIdsSelected' => 'required',
        ]);

        $studentIds = json_decode($input['studentIdsSelected']);

        DB::select('DELETE FROM `classe_student` WHERE `classe_id` = ?', [$id]);

        foreach ($studentIds as $studentId) {
            $student = Student::findOrFail($studentId);

            $student->classe()->attach([$id]);
        }

        $class = Classe::findOrFail($id);
        $class->update($input);
        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classe::findOrFail($id);
        $class->delete();

        return redirect(route('classes.index'));
    }

    public function searchName(Request $request)
    {
        $data = array();

        $classes = Classe::where('name', 'like', '%' . $request->name . '%')->get();

        foreach ($classes as $class) {
            $count = 0;
            $total = 0;
            $studentsCount = 0;
            $totalAssignments = 0;

            foreach ($class->student as $student) {
                $studentsCount++;

                foreach ($student->groupe as $groupe) {
                    if ($groupe->grade != 0) {
                        $count++;
                        $total = $total + $groupe->grade;
                        $totalAssignments++;
                    }
                }
            }

            $averageGrade = $total / $count;
            $averageAssignments = $totalAssignments / $studentsCount;

            $data[] = array(
                'class' => $class,
                'data' => array(
                    'count' => $count,
                    'total' => $total,
                    'studentCount' => $studentsCount,
                    'totalAssignments' => $totalAssignments,
                    'averageGrade' => $averageGrade,
                    'averageAssignments' => $averageAssignments,
                ),
            );
        }

        return $data;
    }
}

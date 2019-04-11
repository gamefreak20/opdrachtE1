<?php

namespace App\Http\Controllers;

use App\Groupe;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GroupesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes = Groupe::paginate(10);

        return view('groupes.index', compact(['groupes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        function is_decimal( $val )
        {
            return is_numeric( $val ) && floor( $val ) != $val;
        }

        $input = $request->validate([
            'assignment' => 'required|numeric',
            'totalHours' => 'required|numeric',
            'studentIds' => 'required',
        ]);

        $addDays = 0;

        if ($input['totalHours'] >= 4) {
            $houresMinus4 = $input['totalHours']/4;
            if (is_decimal($houresMinus4)) {
                $weeks = (int)$houresMinus4;

                $days = ($houresMinus4 - $weeks) * 4;

                $addDays = ($weeks * 7) + $days;

            } else {
                $addDays = $houresMinus4*7;
            }
        } else {
            if ($input['totalHours'] == 2) {
                $addDays = 1;
            }
        }

        $input['grade'] = 0;

        $input['endDate'] = date('Y-m-d', strtotime("+".$addDays." days"));
        $input['startDate'] = date('Y-m-d');

        $groupe = Groupe::create($input);

        $studentIds = json_decode($input['studentIds']);

        foreach ($studentIds as $studentId) {
            $student = Student::findOrFail($studentId);

            $student->groupe()->attach([$groupe->id]);
        }
        return redirect(route('groupe.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
//        $groupe = Groupe::findOrFail($id);
//        return view('groupes.show', compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupe = Groupe::findOrFail($id);
        $students = $groupe->student;
        return view('groupes.update', compact(['groupe', 'students']));
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
            'grade' => 'required',
            'studentIds' => 'required',
        ]);

        $input['comment'] = $request['comment'];

        $studentIds = json_decode($input['studentIds']);

        DB::select('DELETE FROM `groupe_student` WHERE `groupe_id` = ?', [$id]);

        foreach ($studentIds as $studentId) {
            $student = Student::findOrFail($studentId);

            $student->groupe()->attach([$id]);
        }

        $groupe = Groupe::findOrFail($id);
        $groupe->update($input);
        return redirect(route('groupe.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groupe = Groupe::find($id)->delete();
        return redirect(route('groupe.index'));
    }

    public function deleteStudent($id)
    {
        Groupe::where('groupe_id', $id)->delete();
        return $id;
    }

    public function addStudentToGroupe(Request $request)
    {
        DB::select('INSERT INTO `groupes`(`student_id`, `groupe_id`) VALUES (?,?)', [$request->student_id, $request->groupe_id]);
        return $request;
    }

    public function createGroupe(Request $request)
    {
        $data = Groupe::all()->orderBy('groupe_id', 'DESC');
        DB::select("INSERT INTO `groupes` (`student_id`, `groupe_id`) VALUES (?,?)", [$request->student_id, $data->groupe_id]);
        return $request;
    }
}

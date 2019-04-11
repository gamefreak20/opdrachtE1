<?php

namespace App\Http\Controllers;

use App\Classe;
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
        $classes = Classe::all();
        return view('classes.index', compact(['classes']));
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
        return view('classes.update', compact(['class']));
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
}

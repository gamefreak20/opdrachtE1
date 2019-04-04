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
        $groupes = DB::table('groupes')->orderBy('groupe_id', 'desc')->get();

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
        $input = $request->validate([
            'student_id' => 'required|numeric',
            'groupe_id' => 'required|numeric',
        ]);

        Groupe::create($input);

        return redirect(route('groupes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groupe = Groupe::where('groupe_id', $id)->get();
        return view('groupes.show', compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupe_id = $id;
        $groupe = Groupe::where('groupe_id', $id)->get();
        return view('groupes.update', compact(['groupe', 'groupe_id']));
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
            'student_id' => 'required|numeric',
            'groupe_id' => 'required|numeric',
        ]);

        $groupe = Groupe::findOrFail($id);
        $groupe->update($input);

        return redirect(route('groupes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groupe = Groupe::where('groupe_id', $id)->delete();
        return redirect(route('groupe.index'));
    }

    public function deleteStudent($id)
    {
        Groupe::where('groupe_id', $id)->delete();
        return $id;
    }

    public function searchStudent($name)
    {
        $students = Student::where('name', 'like', '%'.$name.'%')->get();
        return $students;
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

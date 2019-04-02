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
        $newGroupe = array();
        $output = array();
        $times = 0;

//        $groupes = Groupe::all()->orderBy('groupe_id', 'desc');

        $groupes = DB::table('groupes')
            ->orderBy('groupe_id', 'desc')
            ->get();
        foreach ($groupes as $groupe) {
            foreach ($groupe as $group) {
                $times++;
                switch ($times) {
                    case 1:
                        $newGroupe['id'] = $group;
                        break;
                    case 2:
                        $newGroupe['student_id'] = $group;
                        break;
                    case 3:
                        $newGroupe['groupe_id'] = $group;
                        break;
                    case 4:
                        $newGroupe['created_at'] = $group;
                        break;
                    case 5:
                        $newGroupe['updated_at'] = $group;
                        break;

                        default:
                        $times = 0;
                }
            }
            $times = 0;
            $output[] = $newGroupe;
            $newGroupe = array();
        }
        $groupes = $output;
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
        $groupe = Groupe::where('groupe_id', $id)->get();
        return view('groupes.update', compact('groupe'));
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
        $groupe = Groupe::findOrFail($id);
        $groupe->delete();
    }

    public function deleteStudent($id)
    {
        Groupe::where('id', $id)->delete();
        return $id;
    }

    public function searchStudent($id)
    {
        $students = Student::where('name', $id)->get();
        return $students;
    }
}

<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = Assignment::all();
        return view('assignments.index', compact(['assignments']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assignments.create');
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
            'number' => 'required',
            'value' => 'required|numeric',
            'title' => 'required',
            'shortDescription' => 'required|max:191',
            'time' => 'required|numeric',
        ]);

        $input['conditional'] = $request['conditional'];

        Assignment::create($input);

        return redirect(route('assignments.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('assignments.show', compact(['assignment']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('assignments.update', compact(['assignment']));
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
            'number' => 'required',
            'value' => 'required|numeric',
            'title' => 'required',
            'shortDescription' => 'required|max:191',
            'time' => 'required|numeric',
        ]);

        $input['conditional'] = $request['conditional'];

        $assignment = Assignment::findOrFail($id);
        $assignment->update($input);

        return redirect(route('assignments.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();

        return redirect(route('assignments.index'));
    }
}

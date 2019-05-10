<?php

namespace App\Http\Controllers;

use App\Classe;
use App\IndexCharts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $charts = $user->indexCharts();
        $data = array();
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $data4 = array();
        $monthNow = date('m');
        $yearNow = date('y');

//        return $charts->get();

        foreach ($charts->get() as $chart) {
            if ($chart->label == "Gemiddelde cijfer de klas") {
                $class = Classe::where(['name' => $chart->data])->first();
                foreach ($class->student()->get() as $student) {
                    foreach ($student->groupe()->get() as $groupe) {
                        if ($groupe->grade != 0.0) {
                            $date = explode('-', $groupe->endDate);
                            if ($date[1] == $monthNow) {
                                $data1[] = $groupe->grade;
                            } elseif ($date[1] == $monthNow-1) {
                                $data2[] = $groupe->grade;
                            } elseif ($date[1] == $monthNow-2) {
                                $data3[] = $groupe->grade;
                            } elseif ($date[1] == $monthNow-3) {
                                $data4[] = $groupe->grade;
                            }
                        }
                    }
                }
                if (count($data1) > 0) {
                    $data1Count = 0;
                    $data1Total = 0;
                    foreach ($data1 as $item) {
                        $data1Count++;
                        $data1Total = $data1Total+$item;
                    }
                    $data1End = $data1Total/$data1Count;
                } else {
                    $data1End = 0;
                }
                if (count($data2) > 0) {
                    $data2Count = 0;
                    $data2Total = 0;
                    foreach ($data2 as $item) {
                        $data2Count++;
                        $data2Total = $data2Total+$item;
                    }
                    $data2End = $data2Total/$data2Count;
                } else {
                    $data2End = 0;
                }
                if (count($data3) > 0) {
                    $data3Count = 0;
                    $data3Total = 0;
                    foreach ($data3 as $item) {
                        $data3Count++;
                        $data3Total = $data3Total+$item;
                    }
                    $data3End = $data3Total/$data3Count;
                } else {
                    $data3End = 0;
                }
                if (count($data4) > 0) {
                    $data4Count = 0;
                    $data4Total = 0;
                    foreach ($data4 as $item) {
                        $data4Count++;
                        $data4Total = $data4Total+$item;
                    }
                    $data4End = $data4Total/$data4Count;
                } else {
                    $data4End = 0;
                }
                $data[$chart->label . " " . $chart->data]  = array (
                        'data' => [
                            $data1End,
                            $data2End,
                            $data3End,
                            $data4End,
                        ]
                    );
                $data1 = array();
                $data2 = array();
                $data3 = array();
                $data4 = array();
            } elseif ($chart->label == "Gemiddelde cijfer alle klassen") {
                $classes = Classe::all();
                foreach ($classes as $class) {
                    foreach ($class->student()->get() as $student) {
                        foreach ($student->groupe()->get() as $groupe) {
                            if ($groupe->grade != 0.0) {
                                $date = explode('-', $groupe->endDate);
                                if ($date[1] == $monthNow) {
                                    $data1[] = $groupe->grade;
                                } elseif ($date[1] == $monthNow-1) {
                                    $data2[] = $groupe->grade;
                                } elseif ($date[1] == $monthNow-2) {
                                    $data3[] = $groupe->grade;
                                } elseif ($date[1] == $monthNow-3) {
                                    $data4[] = $groupe->grade;
                                }
                            }
                        }
                    }
                }
                if (count($data1) > 0) {
                    $data1Count = 0;
                    $data1Total = 0;
                    foreach ($data1 as $item) {
                        $data1Count++;
                        $data1Total = $data1Total+$item;
                    }
                    $data1End = $data1Total/$data1Count;
                } else {
                    $data1End = 0;
                }
                if (count($data2) > 0) {
                    $data2Count = 0;
                    $data2Total = 0;
                    foreach ($data2 as $item) {
                        $data2Count++;
                        $data2Total = $data2Total+$item;
                    }
                    $data2End = $data2Total/$data2Count;
                } else {
                    $data2End = 0;
                }
                if (count($data3) > 0) {
                    $data3Count = 0;
                    $data3Total = 0;
                    foreach ($data3 as $item) {
                        $data3Count++;
                        $data3Total = $data3Total+$item;
                    }
                    $data3End = $data3Total/$data3Count;
                } else {
                    $data3End = 0;
                }
                if (count($data4) > 0) {
                    $data4Count = 0;
                    $data4Total = 0;
                    foreach ($data4 as $item) {
                        $data4Count++;
                        $data4Total = $data4Total+$item;
                    }
                    $data4End = $data4Total/$data4Count;
                } else {
                    $data4End = 0;
                }
                $data[$chart->label] = array (
                    'data' => [
                        $data1End,
                        $data2End,
                        $data3End,
                        $data4End,
                    ]
                );
                $data1 = array();
                $data2 = array();
                $data3 = array();
                $data4 = array();
            } elseif ($chart->label == "Gemiddelde aantal opdrachten per persoon alle klassen") {
                $totalStudents = 0;
                $classes = Classe::all();
                foreach ($classes as $class) {
                    $totalStudents++;
                    foreach ($class->student()->get() as $student) {
                        foreach ($student->groupe()->get() as $groupe) {
                            if ($groupe->grade != 0.0) {
                                $date = explode('-', $groupe->endDate);
                                if ($date[1] == $monthNow) {
                                    $data1[] = 1;
                                } elseif ($date[1] == $monthNow-1) {
                                    $data2[] = 1;
                                } elseif ($date[1] == $monthNow-2) {
                                    $data3[] = 1;
                                } elseif ($date[1] == $monthNow-3) {
                                    $data4[] = 1;
                                }
                            }
                        }
                    }
                }
                $data1End = count($data1)/$totalStudents;
                $data2End = count($data2)/$totalStudents;
                $data3End = count($data3)/$totalStudents;
                $data4End = count($data4)/$totalStudents;


                $data[$chart->label] = array (
                    'data' => [
                        $data1End,
                        $data2End,
                        $data3End,
                        $data4End,
                    ]
                );
                $data1 = array();
                $data2 = array();
                $data3 = array();
                $data4 = array();
            } elseif ($chart->label == "Gemiddelde aantal opdrachten per persoon voor een klas") {
                $totalStudents = 0;
                $class = Classe::where(['name' => $chart->data])->first();
                foreach ($class->student()->get() as $student) {
                    $totalStudents++;
                    foreach ($student->groupe()->get() as $groupe) {
                        if ($groupe->grade != 0.0) {
                            $date = explode('-', $groupe->endDate);
                            if ($date[1] == $monthNow) {
                                $data1[] = $groupe->grade;
                            } elseif ($date[1] == $monthNow-1) {
                                $data2[] = $groupe->grade;
                            } elseif ($date[1] == $monthNow-2) {
                                $data3[] = $groupe->grade;
                            } elseif ($date[1] == $monthNow-3) {
                                $data4[] = $groupe->grade;
                            }
                        }
                    }
                }
                $data1End = count($data1)/$totalStudents;
                $data2End = count($data2)/$totalStudents;
                $data3End = count($data3)/$totalStudents;
                $data4End = count($data4)/$totalStudents;


                $data[$chart->label . " " . $chart->data] = array (
                    'data' => [
                        $data1End,
                        $data2End,
                        $data3End,
                        $data4End,
                    ]
                );
                $data1 = array();
                $data2 = array();
                $data3 = array();
                $data4 = array();
            }
        }

        if (!isset($data)) {
            $data = null;
        }

        $date = [
            $yearNow,
            $monthNow,
            $monthNow-1,
            $monthNow-2,
            $monthNow-3,
        ];

        return view('index', compact('data', 'date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Creates a new chart
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chart(Request $request)
    {
        $input = $request->validate([
            'idSelected' => 'required',
        ]);

        if (!ctype_digit($input['idSelected'])) {
            abort(404);
        }

        /*

        if ($input['idSelected'] == "Gemiddelde cijfer de klas" || $input['idSelected'] == "Gemiddelde aantal opdrachten per persoon voor een klas") {
            $input2 = $request->validate([
                'class' => 'required',
            ]);
            Classe::where(['name' => $input2['class']])->firstOrFail();
        }

        switch ($input['idSelected']) {
            case 1:
                $input2['label'] = "Gemiddelde cijfer alle klassen";
                break;
            case 2:
                $input2['label'] = "Gemiddelde cijfer de klas";
                break;
            case 3:
                $input2['label'] = "Gemiddelde aantal opdrachten per persoon alle klassen";
                break;
            case 4:
                $input2['label'] = "Gemiddelde aantal opdrachten per persoon voor een klas";
                break;
        }

        $input2['user_id'] = Auth::user()->id;

        IndexCharts::created($input2);

        return redirect(route('index'));
        */
        return $request;
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
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
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
    }
}

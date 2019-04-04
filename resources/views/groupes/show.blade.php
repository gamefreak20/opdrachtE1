@extends('layouts.index')

@section('javascript')
    <script src="js/groupes.js"></script>
@endsection

@section('css')

@endsection


@section('content')

    @php($counter = 1)

    <table border="1">
        <thead>
        <tr>
            <th>#</th>
            <th>naam</th>
            <th>tools</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groupe as $group)
            <tr>
                <td>{{$counter++}}</td>
                <td>{{\App\Student::find($group->student_id)['name']}}</td>
                <td>
                    <button onclick="window.location='{{route('groupe.deleteStudent', $group->id)}}';">Verwijder student uit groep</button>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>


@endsection

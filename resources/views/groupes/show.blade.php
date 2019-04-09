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
            <th>naam</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groupe->student as $group)
            <tr>
                <td>
                    {{$group->name}}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    Ik weet niet of dit moet komen



@endsection

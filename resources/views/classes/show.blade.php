@extends('layouts.index')

@section('javascript')
    <script src="{{resource('js/classes.js')}}"></script>
@endsection

@section('css')

@endsection


@section('content')

    <table border="1">
        <thead>
            <tr>
                <th>Naam</th>
            </tr>
        </thead>
        <tbody>
        @php(var_dump($students))
            {{--@for($i = 0; $i < count($students); $i++)--}}

                {{--<tr>--}}
                    {{--<td>{{$students->name}}</td>--}}
                {{--</tr>--}}

            {{--@endfor--}}
        </tbody>
    </table>

@endsection

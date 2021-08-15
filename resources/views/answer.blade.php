@extends('layouts.app')

@section('content')
    <div class="container">
        <div >
            <div class="card">
                <div class="card-header">Admin Dashboard</div>
                <br>
                <table border="1px" cellspacing="3px" cellpadding="7px">
                    <tr>
                        <th><strong>Questions</strong></th>
                        @foreach($question as $q)
                            <td>{{ $q->question }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th><strong>Answers</strong></th>
                    @foreach($answer_array as $a)
                            <td>{{$a}}</td>
                        @endforeach
                    </tr>
                </table>
                <br>
            </div>
        </div>
    </div>
    </div>
@endsection
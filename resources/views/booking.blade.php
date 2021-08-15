@extends('layouts.app')

@section('content')
    <div class="container" align="center">
        <div class="row justify-content-center"  align="center">
            <div class="col-md-10"  align="center">
                <div class="card"  align="center">
                    <div class="card-header">Ticket Booking</div>
                    <div class="card-body"  align="center">


                       <form action="{{ url('reservation') }}" method="get">


                            <div class="text-right"><a class="navbar-brand" href="{{ url('/') }}">Home</a></div>
                            <div class="col-md-9"  align="center">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <select class="form-control" ID="train" name="trainname"  style="color: #1b1e21;" required>
                                            <option style="color: #1b1e21">----------------Select trains here------------------</option>
                                            @foreach($train as $t)
                                                <option value="{{$t->id}}" style="color: #1b1e21">{{$t->trainname}} |
                                                    Available Ticket: {{ $t->totalticket }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row"  align="center">
                                <div class="col-md-3">

                                    </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <span class="form-label">Departing</span>
                                        <input class="form-control" id="depart_date"   name="depart_date" type="date"
                                               value="2019-11-13" min="2019-11-13" max="2020-11-13" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <span class="form-label">Travel class</span>
                                        <select class="form-control" id="class" name="class" required>
                                            <option>General class</option>
                                            <option>AC 3-Tier class</option>
                                            <option>AC 2-Tier class</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <strong>Passenger Details</strong>
                            <table border="2px" cellpadding="7px" align="center">
                                <tbody align="center">
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                            @foreach($question as $quest)
                                         <tr>
                                            <th>{{$quest->question}}</th>
                                             <th><input type="text" name="answer[]" required></th>
                                         </tr>
                                @endforeach
                                </tbody>
                            </table>
<br>
                             <div class="col-md-3">
                               <div class="form-group">
                                        <button class="submit-btn">Book Ticket</button>
                                    </div>
                                </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

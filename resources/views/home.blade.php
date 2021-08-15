@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Passenger Details</div>
                <div class="text-right"><a class="navbar-brand" href="{{ url('/') }}">Home</a></div>

                <?php
                $userId = Auth::id();
                $bookings= DB::table(  'booking')->select('passenger_id','train_id','depart_date','class','answer')
                    ->where('passenger_id','=',$userId)->get();
                ?>

                <div class="card-body">
                    <h2>Passenger Bookings</h2>
                    <table border="1px" cellspacing="3px" cellpadding="7px">
                        <tr>
                            <td><strong>Passenger_id</strong></td>
                            <td><strong>Train_id</strong></td>
                            <td><strong>Depart_date</strong></td>
                            <td><strong>Class</strong></td>
                            <td><strong>Name | Age | Mobile | Child</strong></td>
                        </tr>
                        <tr>
                            @foreach($bookings as $b)
                                <td><strong>{{ $b->passenger_id }}</strong></td>
                                <td><strong>{{ $b->train_id }}</strong></td>
                                <td><strong>{{ $b->depart_date }}</strong></td>
                                <td><strong>{{ $b->class }}</strong></td>
                                <td><strong>{{ $b->answer }}</strong></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

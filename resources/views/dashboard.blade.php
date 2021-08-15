    @extends('layouts.app')

@section('content')
    <div class="container">
            <div >
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>
                    <br>
                    <table border="1px" cellspacing="3px" cellpadding="7px">
                        <tr>
                            <td><strong>Train</strong></td>
                            <td> <a href="{{ url('create') }}"><strong>Create</strong></a></td>
                        <tr>
                            <td><strong>Train_Number</strong></td>
                            <td><strong>Train_Name</strong></td>
                            <td><strong>Total_Ticket</strong></td>
                            <td colspan="2"><strong>Actions</strong></td>
                        </tr>
                    @foreach ($train as $train)
                                <tr>
                                    <td>{{ $train->tnumber }}</td>
                                    <td>{{ $train->trainname }}</td>
                                <td>{{ $train->totalticket }}</td>
                            <td><a href="{{ route('train.edit',[$train->id]) }}">Update</a></td>
                            <td><a href="{{ route('train.destroy',$train->id) }}">Delete</a></td>
                                @endforeach
                        </tr>
                            <tr><td colspan="5">****************************************************************************</td></tr>
                        <tr>
                            <td><strong>News</strong></td>
                            <td><a href="{{ url('createnews') }}"><strong>Add</strong></a></td>
                            <tr>
                                <td><strong>News Title</strong></td>
                                <td><strong>Description</strong></td>
                                <td colspan="2"><strong>Actions</strong></td>
                            </tr>
                            @foreach ($news as $news)
                        </tr>
                            <td>{{ $news->title }}</td>
                            <td>{{ $news->description }}</td>
                            <td><a href="{{ route('news.edit',[$news->id]) }}">Update</a></td>
                            <td><a href="{{ route('news.destroy',$news->id) }}">Delete</a></td>
                            @endforeach
                        </tr>
                            <tr><td colspan="5">****************************************************************************</td></tr>
                            <tr>
                                <td><strong>Questions</strong></td>
                                <td><a href="{{ url('createquestion') }}"><strong>Add</strong></a></td>
                            </tr>
                                <tr>
                                <td><strong>Questions</strong></td>
                                <td colspan="3"><strong>Actions</strong></td>
                            </tr>
                                @foreach ($questions as $questions)
                            </tr>
                            <td colspan="2">{{ $questions->question }}</td>
                            <td><a href="{{ route('question.edit',[$questions->id]) }}">Update</a></td>
                            <td><a href="{{ route('question.destroy',$questions->id) }}">Delete</a></td>
                            @endforeach
                            </tr>
                        <tr>
                            <tr><td colspan="5">****************************************************************************</td></tr>
                            <tr>
                                <td><strong>All Bookings</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Train ID</strong></td>
                                <td><strong>Depart_date</strong></td>
                                <td><strong>Passenger ID</strong></td>
                                <td><strong>Class</strong></td>
                                <td colspan="2"><strong>Actions</strong></td>
                            </tr>
                                @foreach ($booking as $booking)
                            </tr>
                            <td>{{ $booking->train_id }}</td>
                            <td>{{ $booking->depart_date }}</td>
                            <td>{{ $booking->passenger_id }}</td>
                            <td>{{ $booking->class }}</td>
                            <td><a Href="{{ route('answer',['id'=>$booking->id]) }}">View Answers</a></td>
                            <td><a href="{{ route('booking.destroy',$booking->id) }}">Delete</a></td>
                            @endforeach
                            </tr>
                    </table>
                    <br>

                </div>
                </div>
            </div>
        </div>
@endsection

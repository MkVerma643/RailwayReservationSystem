<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <TITLE>Railways Reservation System</TITLE>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            #logo	{
                border-radius: 25px;
            }
            *	{
                color: black;
            }
            #main	{
                width:900px;
                height: 600px;
                margin: 0 auto;
                margin-top: 0px;
                color:#AA1B5A ;
                border-radius: 25px;
                padding-top: 5px;
                padding-right: 10px;
                padding-bottom: 5px;
                padding-left: 10px;
                background-color: ghostwhite;
            }
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                text-color:black;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #booktkt	{
                width: 80%;
                padding: auto;
                padding-top: 50px;
                padding-left: 50px;
                border-radius: 25px;
            }
            #journeytext	{
                color: white;
                font-size: 20px;
                font-family:"Comic Sans MS", cursive, sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="  background-color: cadetblue;">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <strong>Logout</strong></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}"><b>Login</b></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><b>Register</b></a>
                        @endif
                    @endauth
                </div>

            @endif

            <div class="content" >
                <div id="main">
                    <div id="logo">
                        {{--<IMG SRC={{ asset('img/logo.png') }} alt="Logo" id="logo" width="150" >--}}
                        <img src="{{ asset('img/rrs.jpg') }}" alt="RRS Image" width="80%" height="150" style="border-radius: 25px">
                    </div>
                    <div class="" style="align-items: right">
                        <A HREF={{ url('/') }}>Home</A> |
                        <a HREF={{ url('booking') }}>Book a Ticket</a></li> |
                        <a HREF={{ url('/home') }}>Dashboard</a></li>
                        <hr>
                    </div>
                    <h3 align="center"><strong>Available Bookings</strong></h3>
                        <?php $train=\App\TrainData::all(); ?>
                        <table align="center" border="1px">
                            <tr><td>Train Name</td><td>Available Ticket</td></tr><tr>
                        @foreach($train as $t)
                                <td>{{$t->trainname}}</td>
                                <td>{{ $t->totalticket }}</td>
                            </tr>
                        @endforeach
                        </table>
                    <p align="center"><strong>For Reservation</strong><a href="{{ url('booking') }}"> Booking Page</a></p>
                    <hr>
                    <strong>News</strong>
                    @foreach($news as $n)
                    <marquee direction = "left" loop="" scrollamount="5"> {{$n->title}} :- {{$n->description}} </marquee>
                    @endforeach
                </div>
            </div>

        </div>
    </body>
</html>

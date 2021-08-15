<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="{{'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js'}}"></script>

{{--<script type="text/javascript" src="{{'https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.js'}}"></script>--}}
<script type="text/javascript" src="{{ asset('parsley.js') }}"></script>

<style>
    input.parsley-success,
    select.parsley-success,
    textarea.parsley-success {
        color: #468847;
        background-color: #DFF0D8;
        border: 1px solid #D6E9C6;
    }

    input.parsley-error,
    select.parsley-error,
    textarea.parsley-error {
        color: #B94A48;
        background-color: #F2DEDE;
        border: 1px solid #EED3D7;
    }

    .parsley-errors-list {
        margin: 2px 0 3px;
        padding: 0;
        list-style-type: none;
        font-size: 0.9em;
        line-height: 0.9em;
        opacity: 0;
        color: #B94A48;

        transition: all .3s ease-in;
        -o-transition: all .3s ease-in;
        -moz-transition: all .3s ease-in;
        -webkit-transition: all .3s ease-in;
    }

    .parsley-errors-list.filled {
        opacity: 1;
    }
</style>
@extends('layouts.app')

@section('content')
    <div  style="align-content: center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Train</h2>
            </div>

        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('question.store') }}" method="POST" data-parsley-validate="">
        {{ csrf_field() }}

        <div  style="align-content: center">
            <div class="col-xs-7 col-sm-7 col-md-7">
                <div class="form-group ">
                    <strong>Question</strong>
                    <input type="text" name="question" class="form-control" placeholder="Description" data-parsley-trigger="change" required="">
                </div>
            </div>

        </div>
        <div class="col-xs-7 col-sm-7 col-md-7 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

        </div>

    </form>
@endsection
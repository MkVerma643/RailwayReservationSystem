<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends('layouts.app')

@section('content')
<div  style="align-content: center">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User</h2>
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

<form action="{{ route('news.update',$news ) }}" method="POST" >
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div  style="align-content: center">
        <div class="col-xs-7 col-sm-7 col-md-7">
            <div class="form-group">
                <strong>News Title:</strong>
                <input type="text" name="title" value="{{ $news['title'] }}" class="form-control" >
            </div>
        </div>
        <div class="col-xs-7 col-sm-7 col-md-7">
            <div class="form-group">
                <strong>News Description:</strong>
                <input type="text" name="description" value ="{{ $news['description'] }}" class="form-control" >
            </div>
        </div>

        <div class="col-xs-7 col-sm-7 col-md-7 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
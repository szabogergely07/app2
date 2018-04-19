@extends('layouts.admin')

@section('content')



<div class="">
	<h2>Create Post</h2>
</div>

<br>

<div class="col-sm-12">
@include('partials.form_error')
</div>

<div class="container col-sm-12">

{!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
       
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => 8]) !!}
       
    </div>

   	<div class="form-group">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::select('category_id', [''=>'Choose category'] + $categories, null, ['class' => 'form-control']) !!}
       
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::text('photo_id', null, ['class' => 'form-control']) !!}
       
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
        
    </div>

{!! Form::close() !!}
</div>









@stop
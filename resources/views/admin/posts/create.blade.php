@extends('layouts.admin')

@section('content')



<div class="container">
	<h2>Create Post</h2>
</div>

<br>

<div class="container">

{!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'style'=>'width:500px']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::text('body', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

   	<div class="form-group">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::text('category_id', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::text('photo_id', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
        
    </div>

{!! Form::close() !!}
</div>


@include('partials.form_error')






@stop
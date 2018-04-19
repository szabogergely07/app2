@extends('layouts.admin')

@section('content')

<div class="">
	<h2>Edit Post</h2>
</div>

<br>

<div class="col-sm-3">
    <img height=70 class="img-rounded img-responsive" src="{{$post->user->photo_id}}">    

</div>
<br>

<div class="container col-sm-9">

{!! Form::model($post, ['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id]]) !!}
{{ csrf_field() }}

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
        {!! Form::submit('Update Post', ['class' => 'btn btn-primary col-sm-4', 'style' => 'margin-right: 10px']) !!}
        
    </div>
{!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id]]) !!}
    {{ csrf_field() }}
         <div class="form-group">
        {!! Form::submit('Delete Post', ['class' => 'btn btn-danger col-sm-4']) !!}
        
        </div>
    {!! Form::close() !!}




</div>






@include('partials.form_error')







@stop
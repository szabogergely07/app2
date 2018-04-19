@extends('layouts.admin')

@section('content')

<div class="">
	<h2>Edit User</h2>
</div>

<br>

<div class="col-sm-3">
    <img height=70 class="img-rounded img-responsive" src="{{$user->photo_id}}">    

</div>
<br>

<div class="container col-sm-9">

{!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id]]) !!}
{{ csrf_field() }}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

     <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role') !!}
        {!! Form::select('role_id', array(0 => 'Admin', 1 => 'Subscriber'), 0, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status') !!}
        {!! Form::select('is_active', array(0 => 'Not Active', 1=> 'Active'), null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::text('photo_id', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::submit('Update User', ['class' => 'btn btn-primary col-sm-4', 'style' => 'margin-right: 10px']) !!}
        
    </div>

{!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
    {{ csrf_field() }}
         <div class="form-group">
        {!! Form::submit('Delete User', ['class' => 'btn btn-danger col-sm-4']) !!}
        
        </div>
    {!! Form::close() !!}




</div>






@include('partials.form_error')







@stop
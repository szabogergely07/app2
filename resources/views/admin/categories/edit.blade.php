@extends('layouts.admin')

@section('content')

<div class="">
	<h2>Edit Category</h2>
</div>

<br>


<div class="container col-sm-9">

{!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id]]) !!}
{{ csrf_field() }}

     <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Category', ['class' => 'btn btn-primary col-sm-4', 'style' => 'margin-right: 10px']) !!}
        
    </div>
{!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]]) !!}
    {{ csrf_field() }}
         <div class="form-group">
        {!! Form::submit('Delete Category', ['class' => 'btn btn-danger col-sm-4']) !!}
        
        </div>
    {!! Form::close() !!}




</div>






@include('partials.form_error')







@stop
@extends('layouts.admin')

@section('content')





<div class="col-sm-12">
@include('partials.form_error')
</div>

<div class="row">

	<div class="container col-sm-6">

		<div class="">
			<h2>Create Category</h2>
		</div>

		<br>

	{!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}

	    <div class="form-group">
	        {!! Form::label('name', 'Name') !!}
	        {!! Form::text('name', null, ['class' => 'form-control']) !!}
	       
	    </div>

	   
	    <div class="form-group">
	        {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
	        
	    </div>

	{!! Form::close() !!}
	</div>

	<div class="col-sm-6">

		<h2>Categories</h2>

		<table class="table">
			<thead>
			  <tr>
			  	<th>Id</th>
			  	<th>Name</th>
			    <th>Created</th>
			  </tr>
			</thead>

		  @foreach($categories as $category)

		  <tr>
		    <td>{{$category->id}}</td>
		    <td><a href="{{route('admin.categories.edit', $category)}}">{{$category->name}}</a></td>
		    <td>{{$category->created_at->diffForHumans()}}</td>
		  </tr>

		  	@endforeach
		  
		</table>

	</div>

</div>


@stop
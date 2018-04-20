@extends('layouts.admin')

@section('content')


<h2>Posts</h2>

<table class="table">
	<thead>
	  <tr>
	  	<th>Id</th>
	  	<th>Owner</th>
	    <th>Title</th>
	    <th>Body</th>
	    <th>Photo</th>
	    <th>Category</th>
	    <th>Created</th>
	    <th>Updated</th>
	   
	  </tr>
	</thead>

  @foreach($posts as $post)

  <tr>
    <td>{{$post->id}}</td>
    <td>{{$post->user->name}}</td>
    <td><a href="{{route('admin.posts.edit', $post->id)}}"> {{str_limit($post->title, 10)}}</a></td>
    <td>{{str_limit($post->body, 20)}}</td>
    <td><img height=50 class="img-rounded" src="{{$post->photo_id}}"></td>
    <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
    <td>{{$post->created_at->diffForHumans()}}</td>
  	<td>{{$post->updated_at->diffForHumans()}}</td>
  </tr>

  	@endforeach
  
</table>



@stop
@extends('layouts.admin')

@section('content')

<h2>Users</h2>

<table class="table">
	<thead>
	  <tr>
	    <th>Id</th>
	    <th>Photo</th>
	    <th>Name</th>
	    <th>Email</th>
	    <th>Role</th>
	    <th>Status</th>
	    <th>Created</th>
	    <th>Updated</th>
	  </tr>
	</thead>

  @foreach($users as $user)

  <tr>
    <td>{{$user->id}}</td>
    <td><img height=50 src="{{$user->photo_id}}"></td>
    <td><a href="{{route('admin.users.edit', $user->id)}}"> {{$user->name}}</a></td>
    <td>{{$user->email}}</td>
    <td>{{$user->role_id == 1 ? "Subscriber" : "Admin"}}</td>
    <td>{{$user->is_active == 1 ? "Active" : "Not Active"}}
    <td>{{$user->created_at->diffForHumans()}}</td>
  	<td>{{$user->updated_at->diffForHumans()}}</td>
  </tr>

  	@endforeach
  
</table>



@stop
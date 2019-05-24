@extends('admin.master')
@section('content')
<div class="container-fluid">
	@include('admin.error')
		<form action="{{route('adminEditUser', $user->id)}}" method="POST" class="form-horizontal" role="form">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

			<div class="form-group">
				<label class="sr-only" for="">Username</label>
				<input type="text" class="form-control" name="username" value="{{$user->username}}">
			</div>
			<div class="form-group">
				<label class="sr-only" for="">Email</label>
				<input type="email" class="form-control" name="email" value="{{$user->email}}">
			</div>
			<div class="form-group">
				<label class="sr-only" for="">Phone</label>
				<input type="number" class="form-control" name="phone" value="{{$user->phone}}">
			</div>
			<div class="form-group">
				<label class="sr-only" for="">Address</label>
				<input type="text" class="form-control" name="address" value="{{$user->address}}">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	
</div>
@endsection

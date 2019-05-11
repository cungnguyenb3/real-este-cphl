@extends('admin.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<form action="{{route('admineditblog', $blog->id)}}" method="POST" class="form" role="form">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="sr-only" for="">Title</label>
				<input type="text" name="title" value="{!! old ('title',isset($blog)?$blog['title']:NULL) !!}" class="form-control" id="" >
			</div>
			<div class="form-group">
				<label class="sr-only" for="">Content</label>
				<textarea name="content" value="{!! old ('content',isset($blog)?$blog['content']:NULL) !!}" class="form-control">{{$blog->content}} </textarea>
			</div>
			<div class="form-group">
				<label class="sr-only" for="">Image</label>
				<input type="file" class="form-control" name="image" value="{!! old ('image',isset($blog)?$blog['image']:NULL) !!}" >
				<img height="200" width="200" src="{{ asset('homeland/images/'.$blog["image"]) }}" alt="">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection
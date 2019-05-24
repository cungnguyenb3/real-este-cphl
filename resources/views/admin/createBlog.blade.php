@extends('admin.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			
		
		<form action="{{route('createBLog')}}" method="post" role="form">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<legend>Create Blogs</legend>
		@include('admin.error')
			<div class="form-group ">
				<label for="">Title</label>
				<input type="text" class="form-control" name="title" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Content</label>
				<textarea style="height: 200px" name="content" class="form-control"></textarea>
			</div>
		
			<div class="form-group">
				<label for="">Image</label>
				<input  type="file" class="form-control" name="image" placeholder="Input field">
			</div>
			
		
			<button style="margin-left: 450px" type="submit" class="btn btn-primary center">Submit</button>
		</form>
		</div>
	</div>
</div>
@endsection
<style type="text/css">
	.row{
		width: 100%;
		height: 100%;
	}
</style>
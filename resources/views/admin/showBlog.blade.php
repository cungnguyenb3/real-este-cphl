@extends('admin.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		@include('admin.error')
		<table class="table table-responsive" border="1px">
						<thead>
							<tr>
								<th class="text-center">TITLE</th>
								<th class="text-center" style="width: 20px">CONTENT</th>
								<th class="text-center" >IMAGE</th>
								<th class="text-center" >USER_ID</th>
								<th class="text-center" >ACTION</th>
							</tr>
						</thead>
						<tbody>
							@foreach($blog as $b)
							<tr align="center">
								<td >{{$b->title}}</td>
								<td  style="width: 20px">{{$b->content}}</td>
								
								<td >
									<img src="{{ ('img/blog/'.$b["image"]) }}" width="150" height="150" alt="{!! $b["name"] !!}">
								</td>
								<td >{{$b->user_id}}</td>
								<td >
									<a href="{{route('createBLog')}}"><i class="fa fa-plus-circle"></i>&nbsp;ADD</a>&nbsp;&nbsp;
		                        	<a href="{{route('admineditblog', $b->id)}}"><i class="fa fa-pencil"></i>&nbsp;EDIT</a>&nbsp;&nbsp;
		                          	<a href="{{route('admindeleteblog', $b->id)}}"><i class="fa fa-trash"></i>&nbsp;DELETE</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
	</div>
</div>
@endsection
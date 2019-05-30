
@if(count($errors)>0)
<div class="alert alert-danger">
	@foreach($errors->all() as $err)
	{{$err}}
	@endforeach
</div>
@endif
@if(Session::has('thanhcong'))
<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
@endif
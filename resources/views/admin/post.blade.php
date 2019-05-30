@extends('admin.master')
@section('content')
<div class="container-fluid">

	@foreach($post as $p)

	<div class="row dad">
	
		
		<div class="col-2">
			
				<div class="row">
					<img class="center-block" src="img/post/{{$p->main_image }}" height="190" width="190">
				</div>
			
		</div>

		<div class="col-10">
			<div class="row name">

				 {{$p->name}}
			</div>
			<div class="row detail">
				<i class="mdi mdi-details"></i>
				Detail:	{{$p->description}}					
			</div>
			<div class="row s3">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					price: {{$p->price}} $	
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					Bedrom: {{$p->number_of_bedroom}}	
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					Bathroom: {{$p->number_of_bathroom}}	 
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Area: {{$p->area}}	 
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					Year: {{$p->year_built}}	 
				</div>
			</div>
			<div class="row s3">
				<div class="col-3">
					@foreach($user as $u)
					@if($u->id == $p->user_id)
						Seller: {{$u->username}}	

					@endif
					@endforeach
				</div>
				<div class="col-3">
					@foreach($property as $pro)
					@if($pro->id == $p->property_type_id)
						Type of house: {{$pro->name}}	

					@endif
					@endforeach
				</div>
				<div class="col-3">
					@if($p->transaction_type==0)
						Type: Rent
					@else
						Type: Sell
					@endif		
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					ADDRESS: {{$p->location}}
				</div>
			</div>
			<div class="row button">
				<a method="post" href="{{route('adminAcceptPost',$p->id)}}" ><button type="button" action="" class="btn btn-success accept">ACCEPT</button></a>
				<a method="post" href="{{route('adminDeletePost',$p->id)}}" ><button type="button" class="btn btn-danger delete">Delete</button></a>
			</div>
		</div>
		<!-- </form> -->
	</div>
	@endforeach
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<style type="text/css">
	.row{
		{background-color: #1A1A1A;font-size: 15px; color: white;font-weight:normal;}
	}
	.name{
		color: red;
		font-size: 20px;
		text-align: center;
		padding-left: 12px; 
	}
	.detail{
		font-size: 14px;
		padding-left: 12px; 
	}
	.location{
		padding-right: 4px;
		font-size: 14px;
	}
	.s3{
		font-size: 14px;
		padding-top: 20px;
	}
	.button{
		
		padding-top: 30px;

	}
	.dad{
		 border-style: dashed;
    border-width: 3px;
    border-left-width: 10px;
    border-right-width: 10px;
    border-color: black;
	}
	.accept{
		padding-right: 10px;
		margin-left: 270px;
	}
	.delete{
		margin-left: 30px;
	}

</style>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
@endsection
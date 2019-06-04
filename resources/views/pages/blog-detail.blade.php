@extends('layout.blog.master')
@section('content')
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
      			
                <div class="thumbnail blog-box clearfix">

                    <img src="img/blog/{{$blog->image}}" alt="{{$blog->name}}" class="img-responsive">
                    <!-- detail -->
                    <div class="caption detail">
                        <!--Main title -->
                        <h3 class="title">
                            <a href="#">{{$blog->title}}</a>
                        </h3>
                        <!-- Post meta -->
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-user"></i>
                            	@foreach($user as $u)
                                    @if($u->id == $blog->user_id)
                                        {{$u->username}}
                                    @endif    
                                @endforeach</a></span>
                            <span><a><i class="fa fa-calendar "></i>{{$blog->writing_date}}</a></span>
                           <!--  <span><a href="#"><i class="fa fa-bars"></i>The Nest</a></span> -->
                           
                        </div>
                        <!-- paragraph -->
                        
                        <p>{{$blog->content}}</p>
                        <div class="row mrg-btm-30">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <p>{{$blog->content}}</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <img src="img/properties/properties-3.jpg" alt="properties-3" class="img-responsive">
                            </div>
                        </div>
                        <blockquote>
                           {{$blog->content}}
                        </blockquote>
                        

                       
                    </div>
                </div>
               
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="sidebar">
                    <!-- Search box -->
                    <div class="sidebar-widget search-box">
                        <form class="form-inline form-search" method="GET">
                            <div class="form-group">
                                <label class="sr-only" for="textsearch2">Search</label>
                                <input type="text" class="form-control" id="textsearch2" placeholder="Search">
                            </div>
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                  
                    <!-- Popular posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="main-title-2">
                            <h1><span>popular</span> blog</h1>
                        </div>
                        @foreach($blogPopular as $b)
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="images/{{$b->image}}" alt="small-properties-1" width="170" height="100">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="{{route('blogdetail',$b->slug)}}">{{$b->title}}</a>
                                </h3>
                                <p>{{$b->writing_date}}</p>
                                <div class="price">
                                    @foreach($user as $u)
                                    @if($u->id == $b->user_id)
                                        {{$u->username}}
                                    @endif    
                                	@endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
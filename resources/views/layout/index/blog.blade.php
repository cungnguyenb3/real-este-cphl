<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our</span> Blog</h1>
        </div>
        <div class="row">
        @foreach($blog as $b)
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">

                        <img src="images/{{$b->image}}" alt="blog-1" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <!-- <li class="profile-user">
                                <img src="img/avatar/avatar-1.jpg" alt="user-blog">
                            </li> -->
                            <li><span>
                                @foreach($user as $u)
                                @if($u->id == $b->user_id)
                                    {{$u->username}}    
                                @endif
                                @endforeach
                                </span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="blog-single-sidebar-right.html">{{$b->title}}</a></h4>
                        <!-- paragraph -->
                        <p><?php echo str_limit($b->content, 100); ?></p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="{{route('blogdetail',$b->slug)}}" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
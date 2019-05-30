@extends('layout/properties-list/master')
@section('content')
<div class="properties-section property-big content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-2">
                           <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <span class="hidden-xs">Properties List</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 col-pad">
                            <div class="sorting-options">
                                <select class="sorting">
                                   <option>New To Old</option>
                                   <option>Old To New</option>
                                   <option>Properties (High To Low)</option>
                                   <option>Properties (Low To High)</option>
                                </select>
                                <a href="properties-list-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-fullwidth.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                           </div>
                       </div>
                   </div>
               </div>
                <!-- Option bar end -->
                <div class="clearfix"></div>

                <!-- property start -->
                @foreach($post as $value)
                <div class="property property-hp clearfix wow fadeInUp delay-03s">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 col-pad">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            @if($value->transaction_type == 0)
                            <div class="property-tag button sale">For Sale</div>
                            @else
                            <div class="property-tag button sale">For Rent</div>
                            @endif
                            <div class="property-price">${!! $value->price !!}</div>
                            <img src="{!! $value->main_image !!}"alt="fp-list" class="img-responsive">
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="img/properties/properties-2.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="img/properties/properties-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 property-content ">
                        <!-- title -->
                        <h1 class="title">
                            <a href="properties-details.html">{!! $value->name !!}</a>
                        </h1>
                        <!-- Property address -->
                        <h3 class="property-address">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i>{!! $value->location !!},
                            </a>
                        </h3>
                        <p>{!! $value->description !!} </p>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                <span>{!! $value->area !!} sq ft</span>
                            </li>
                            <li>
                                <i class="flaticon-bed"></i>
                                <span>{!! $value->number_of_bedroom !!} Beds</span>
                            </li>
                            <li>
                                <i class="flaticon-monitor"></i>
                                <span>TV </span>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <span>{!! $value->number_of_bathroom !!} Baths</span>
                            </li>
                            <li>
                                <i class="flaticon-vehicle"></i>
                                <span>1 Garage</span>
                            </li>
                            <li>
                                <i class="flaticon-building"></i>
                                <span> 3 Balcony</span>
                            </li>
                        </ul>
                        <!-- Property footer -->
                        <div class="property-footer">
                            <span class="left">
                                <a href="#"><i class="fa fa-user"></i>{!! $value->username !!}</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- property end -->

                <!-- Page navigation start -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        {!! $post->links() !!}                   
                    </ul> 
                </nav>
                <!-- Page navigation end-->
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout/index/master')
@section('content')
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
        </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Commercial</li>
            <li data-filter="4" class="btn btn-inline filtr-button filtr">Garage</li>
            <li data-filter="5" class="btn btn-inline filtr-button filtr">Lot</li>

        </ul>
        <div class="row">
            <div class="filtr-container">
                @foreach($post as $p)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="{{$p->property_type_id}}">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">
                                @if($p->transaction_type==1)
                                    For Sale
                                @elseif($p->transaction_type==2)
                                    For Rent
                                @endif        
                            </div>
                            <div class="property-price">${{$p->price}}</div>
                            <img src="img/mainimage/{{$p->main_image}}" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="img/properties/properties-1.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>

                                    <a href="img/mainimage/{{$p->main_image}}" class="hidden"></a>
                                    <a href="img/mainimage/{{$p->main_image}}" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="{{route('properties-details',$p->id)}}">{{$p->name}}</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i>{{$p->location}}
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>{{$p->area}}m2</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>{{$p->number_of_bedroom}} Beds</span>
                                </li>
                                <!-- <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV </span>
                                </li> -->
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span> {{$p->number_of_bathroom}} Baths</span>
                                </li>
                                <li>
                                    <i class="flaticon-year"></i>
                                    <span>{{$p->year_build}}</span>
                                </li>
                                
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">
                                    <a href="#"><i class="fa fa-user"></i>
                                        @foreach($user as $u)
                                        @if($u->id == $p->user_id)
                                            {{$u->username}}    
                                        @endif
                                        @endforeach
                                    </a>
                                </span>
                                <span class="right">
                                    <i class="fa fa-calendar"></i>{{$p->create_at}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
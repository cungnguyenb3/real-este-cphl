@extends('layout/sale/master')
@section('content')
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <span class="hidden-xs">Properties List</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                            <div class="sorting-options">
                                <select class="sorting">
                                    <option>New To Old</option>
                                    <option>Old To New</option>
                                    <option>Properties (High To Low)</option>
                                    <option>Properties (Low To High)</option>
                                </select>
                                <a href="properties-list-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-rightside.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Option bar end -->

                <div class="clearfix"></div>
                <!-- Property start -->
                

                @foreach($sale as $value)
                <div class="property clearfix wow fadeInUp delay-03s">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-pad">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">${!! $value->price !!}</div>
                            <img src="{!! $value->main_image !!}" alt="fp-list" class="img-responsive hp-1">
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
                                    <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="img/properties/properties-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 property-content ">
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
                                <span> {!! $value->number_of_bathroom !!} Baths</span>
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
                                <a href="#"><i class="fa fa-user"></i> {!! $value->username !!}</a>
                            </span>
                            <span class="right">
                                <i class="fa fa-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <!-- Property end -->

                <!-- Page navigation start -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        {!! $sale->links() !!}
                    </ul>
                </nav>
                <!-- Page navigation end-->
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <!-- Search contents sidebar start -->
                <div class="sidebar-widget">
                    <div class="main-title-2">
                        <h1><span>Advanced</span> Search</h1>
                    </div>

                    <form method="GET">
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                <option>Property Status</option>
                                <option>For Sale</option>
                                <option>For Rent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                <option>Location</option>
                                <option>United States</option>
                                <option>United Kingdom</option>
                                <option>American Samoa</option>
                                <option>Belgium</option>
                                <option>Cameroon</option>
                                <option>Canada</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
                                <option>Property Types</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Land</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
                                <option>Area From</option>
                                <option>1000</option>
                                <option>800</option>
                                <option>600</option>
                                <option>400</option>
                                <option>200</option>
                                <option>100</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathroom">
                                        <option>Bathroom</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="balcony">
                                        <option>Balcony</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" name="garage">
                                        <option>Garage</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="range-slider">
                            <label>Area</label>
                            <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="range-slider">
                            <label>Price</label>
                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                            <div class="clearfix"></div>
                        </div>

                        <a class="show-more-options" data-toggle="collapse" data-target="#options-content">
                            <i class="fa fa-plus-circle"></i> Show More Options
                        </a>
                        <div id="options-content" class="collapse">
                            <label class="margin-t-10">Features</label>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Free Parking
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Air Condition
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Places to seat
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Swimming Pool
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5">
                                    Laundry Room
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">
                                    Window Covering
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox7" type="checkbox">
                                <label for="checkbox7">
                                    Central Heating
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox8" type="checkbox">
                                <label for="checkbox8">
                                    Alarm
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button class="search-button">Search</button>
                        </div>
                    </form>
                </div>

                <!-- Category posts start -->
                <div class="sidebar-widget category-posts">
                    <div class="main-title-2">
                        <h1><span>popular</span> Category</h1>
                    </div>
                    <ul class="list-unstyled list-cat">
                        <li><a href="#">Single Family </a> <span>(45)  </span></li>
                        <li><a href="#">Apartment  </a> <span>(21)  </span></li>
                        <li><a href="#">Condo </a> <span>(23)  </span></li>
                        <li><a href="#">Multi Family </a> <span>(19)  </span></li>
                        <li><a href="#">Villa </a> <span>(19)  </span></li>
                        <li><a href="#">Other  </a> <span>(22)  </span></li>
                    </ul>
                </div>

                <!-- Popular posts start -->
                <div class="sidebar-widget popular-posts">
                    <div class="main-title-2">
                        <h1><span>Recent</span> Properties</h1>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="img/properties/small-properties-1.jpg" alt="small-properties-1">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h3>
                            <p>February 27, 2018</p>
                            <div class="price">
                                $734,000
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="img/properties/small-properties-2.jpg" alt="small-properties-2">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h3>
                            <p>February 27, 2018</p>
                            <div class="price">
                                $734,000
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="img/properties/small-properties-3.jpg" alt="small-properties-3">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h3>
                            <p>February 27, 2018</p>
                            <div class="price">
                                $734,000
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Helping box Start -->
                <div class="sidebar-widget helping-box clearfix">
                    <div class="main-title-2">
                        <h1><span>Helping</span> Center</h1>
                    </div>
                    <div class="helping-center">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <h4>Address</h4>
                        <p>123 Kathal St. Tampa City,</p>
                    </div>
                    <div class="helping-center">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <h4>Phone</h4>
                        <p><a href="tel:+55-417-634-7071">+55 417 634 7071</a> </p>
                    </div>
                </div>

                <!-- Latest reviews start -->
                <div class="sidebar-widget latest-reviews mb-0">
                    <div class="main-title-2">
                        <h1><span>Latest</span> Reviews</h1>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="img/avatar/avatar-1.jpg" alt="avatar-1">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="#">John Antony</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.
                                Etiamrisus tortor, accumsan at nisi et,
                            </p>
                        </div>
                    </div>
                    <div class="media mb-0">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="img/avatar/avatar-2.jpg" alt="avatar-2">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="#">Karen Paran</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.
                                Etiamrisus tortor, accumsan at nisi et,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
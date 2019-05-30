@extends('layout/submit-property/master')
@section('content')
<div class="content-area-7 submit-property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="submit-address">
                    <form method="POST" action="{{route('postProperty')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="main-title-2">
                            <h1><span>Basic</span> Information</h1>
                        </div>
                        <div class="search-contents-sidebar mb-30">
                            <div class="form-group">
                                <label>Property Title</label>
                                <input type="text" class="input-text" name="txtName" placeholder="Property Title">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="selectpicker search-fields" name="selTransactionType">
                                            <option value="0">For Sale</option>
                                            <option value="1">For Rent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="selectpicker search-fields" name="selPropertyType">
                                            <option value="1">Apartment</option>
                                            <option value="2">House</option>
                                            <option value="3">Commercial</option>
                                            <option value="4">Garage</option>
                                            <option value="5">Lot</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="input-text" name="txtPrice" placeholder="USD">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label>Area/Location</label>
                                        <input type="text" class="input-text" name="txtArea" placeholder="m2">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label>Rooms</label>
                                        <select class="selectpicker search-fields" name="slcRoom">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Property</span> Gallery</h1>
                        </div>
                        <div id="uploadImage" class="dropzone dropzone-design mb-50">
                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                        </div>
                        <div id="albumImage"></div>
                        <div class="main-title-2">
                            <h1><span>Location</span></h1>
                        </div>
                        <div class="row mb-30 ">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="input-text" name="txtAddress"  placeholder="Address">
                                </div>
                            </div>
                            
                        </div>

                        <div class="main-title-2">
                            <h1><span>Detailed</span> Information</h1>
                        </div>

                        <div class="row mb-30">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Detailed Information</label>
                                    <textarea class="input-text" name="txtDescription" placeholder="Detailed Information"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Building Age</label>
                                    <input type="text" class="input-text" name="txtBuildingAge"  placeholder="BuildingAge">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <select class="selectpicker search-fields" name="selBedroom">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Bathrooms </label>
                                    <select class="selectpicker search-fields" name="selBathroom">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @if(Auth::check())
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        @endif
                        <div class="row mb-30">
                            <!-- <a href="#" class="btn button-md button-theme">Preview</a> -->
                            <button class="btn button-md button-theme" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
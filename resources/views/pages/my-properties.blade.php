@extends('layout/my-properties/master')
@section('content')
<div class="content-area-7 my-properties">
    <div class="container">
        <div class="row">
            @include('layout.left-property-content')
            

            <div class="col-lg-8 col-md-8 col-sm-12">
                 <div class="main-title-2">
                     <h1><span>My</span> Properties</h1>
                 </div>
                <!-- table start -->
                <table class="manage-table responsive-table">
                    <tbody>
                    @foreach($myProperties as $value)
                    <tr>
                        <td class="title-container">
                            <img src="{!! $value->main_image !!}" alt="my-properties-1" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">{!! $value->name !!}</a></h4>
                                <span><i class="fa fa-map-marker"></i> {!! $value->location !!}, </span>
                                <span class="table-property-price">${!! $value->price !!}</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- table end -->
            </div>
        </div>
    </div>
</div>
@endsection
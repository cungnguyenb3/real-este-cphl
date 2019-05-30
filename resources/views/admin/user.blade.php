@extends('admin.master')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
                <br>                                                                            
    <div id="boom" class="collapse show">
    <div class="table-responsive">
        <table class="table">
        <thead class="thead">

            @include('admin.error')
            <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
            <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
            <td>{{$u->username}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->phone}}</td>
            <td>{{$u->address}}</td>
            <td>
                <a href=""><i class="fa fa-plus-circle"></i>&nbsp;ADD</a>&nbsp;&nbsp;
                    <a href="{{route('adminEditUser', $u->id)}}"><i class="fa fa-edit"></i>&nbsp;EDIT</a>&nbsp;&nbsp;
                    <a href="{{route('adminDeleteUser', $u->id)}}"><i class="fa fa-trash"></i>&nbsp;DELETE</a>  
            </td>

            <td> @if($u->role_id == 2)
                    Admin
                @else 
                    User
                @endif
            </td>
            </tr>
            @endforeach
        </tbody>

        </table>
    </div>
    </div>

    <button type="button" class="btnS" data-toggle="collapse" data-target="#boom">Show</button>

    </div> 
    <style type="text/css">
            tbody{font-size: 14px;background-color: transparent;}
            .thead{background-color: #1A1A1A;font-size: 15px; color: white;font-weight:normal;}
            .btnS{float: right;background-color: hotpink;border: none;color: white;padding: 5px 15px;text-align: left;font-size: 14px;}
            .btnS:focus{outline:none;}
            .btnS:after {content: "Less";float: right;margin-left: 3px;}
            .btnS.collapsed:after {content: "More";}
    </style>
 </div> 
@endsection

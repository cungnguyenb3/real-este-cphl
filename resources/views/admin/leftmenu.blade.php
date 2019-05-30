 <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @if(Auth::check())
                                        <h5 class="m-b-0 user-name font-medium"> {{Auth::user()->username}} <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email">{{Auth::user()->email}}</span>
                                        @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- use auth to show -->
                        @if(Auth::user()->role_id==1)
                         <li class="p-15 m-t-10"><a href="{{route('adminCreate')}}" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New Admin</span> </a></li>
                        @endif

                        <!-- User Profile-->
                       <!--  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{Route('adminindex')}}" aria-expanded="false"><i class="mdi mdi-details"></i><span class="hide-menu">Dashboard</span></a></li> -->

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{Route('post')}}" aria-expanded="false"><i class="mdi mdi-arrow-up-bold-circle"></i><span class="hide-menu">Post</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{Route('adminEditProfile')}}" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                        
                        @if(Auth::user()->role_id==1)
                        <li class="sidebar-item nav"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"  href="{{route('adminshowblog') }}" aria-expanded="false"><i class="mdi mdi mdi-blogger"></i><span class="hide-menu">Blog</span>
                            </a>
                            
                        </li>

                         @endif
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{Route('user')}}" aria-expanded="false"><i class="mdi mdi-account-switch"></i><span class="hide-menu">User</span></a></li>

                       <!--  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost:8088/project/public/ad_blank" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Blank</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost:8088/project/public/ad_page404" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span class="hide-menu">404</span></a></li>
                        <li class="text-center p-40 upgrade-btn">
                            <a href="https://wrappixel.com/templates/xtremeadmin/" class="btn btn-block btn-danger text-white" target="_blank">Upgrade to Pro</a>
                        </li> -->
                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        

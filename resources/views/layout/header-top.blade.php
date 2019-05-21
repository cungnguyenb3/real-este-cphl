<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="list-inline">
                    <a href="tel:1-8X0-666-8X88"><i class="fa fa-phone"></i>1-8X0-666-8X88</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="top-social-media pull-right">
                    @if(Auth::check())
                    <li>
                        <a href="#" class="sign-in"><i class="fa fa-user"></i> {{Auth::user()->username}}</a>
                    </li>
                    <li>
                        <a href="{{route('getLogout')}}" class="sign-in"><i class="fa fa-sign-in"></i> Logout</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('getLogin')}}" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li>
                        <a href="{{route('getRegister')}}" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>
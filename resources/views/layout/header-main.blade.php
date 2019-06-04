<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route('index')}}" class="logo">
                    <img src="img/logos/logo.png" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a href="{{route('index')}}">
                            Home
                        </a> 
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                        Agents<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('properties-list')}}">Fullwidth</a></li>
                            <li><a href="{{route('sale')}}">Sale</a></li>
                            <li><a href="{{route('rent')}}">Rent</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                       <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                           Properties<span class="caret"></span>
                       </a>
                       <ul class="dropdown-menu">
                           @foreach($properties_type as $value)
                               <li><a href="{{route('properties',$value->slug)}}">{{$value["name"]}}</a></li>
                           @endforeach
                           
                       </ul>
                    </li>
                    
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="{{route('submit-property')}}" class="button">
                            Submit Property
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
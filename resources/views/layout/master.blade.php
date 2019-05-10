<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout/css')
    @yield('css')
  </head>
  <body>  
    @include('layout/header')
    @yield('content')   
    @include('layout/footer')
    
  </body>
  @yield('script')
  @include('layout/script')
</html>
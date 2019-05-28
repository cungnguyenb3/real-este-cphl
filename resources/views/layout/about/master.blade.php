<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/nest/about-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 03:43:38 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P5MJCCG');</script>
    <!-- End Google Tag Manager -->
    <title>The Nest - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- Chuyển đường dẫn sang thẻ base -->
    <base href="{{asset('public/')}}">

    <!-- CSS -->
    @include('layout.about.stylesheet')

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5MJCCG"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Top header start -->
@include('layout.header-top')
<!-- Top header end -->

<!-- Main header start -->
@include('layout.header-main')
<!-- Main header end -->

<!-- Sub banner start -->
@include('layout.about.sub-banner')
<!-- Sub Banner end -->

<!-- About city estate start -->
@yield('about-city')
<!-- About city estate end -->

<!-- Agent section start -->
@include('layout.agent-section')
<!-- Agent section end -->

<!-- Counters strat -->
@include('layout.about.counters')
<!-- Counters end -->

<!-- Customer say start -->
@include('layout.about.customer-say')
<!-- Customer say end -->

<!-- Partners block start -->
@include('layout.about.partners')
<!-- Partners block end -->

<!-- Footer start -->
@include('layout.footer')
<!-- Footer end -->

<!-- Copy right start -->
@include('layout.copy-right')
<!-- Copy end right-->

<!-- Java Script -->
@include('layout.about.script')

</body>

<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/nest/about-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 03:43:38 GMT -->
</html>
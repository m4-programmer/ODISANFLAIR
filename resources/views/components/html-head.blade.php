<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="magz, html5, css3, template, magazine template">
    <!-- Shareable -->
    <meta property="og:title" content="@yield('meta_title', 'Odisanflare')" />
    <meta property="og:description" content="@yield('meta_description', 'Default Description')" />
    <meta property="og:image" content="@yield('meta_image', asset('default-image.jpg'))" />
    <meta property="og:url" content="@yield('meta_url', request()->url())" />
    <title>@yield("meta_title", "Odisanflare &mdash; Odisanflare Markets &amp; Elit Trading Ideas")</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('asset/scripts/bootstrap/bootstrap.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{asset('asset/scripts/ionicons/css/ionicons.min.css')}}">
    <!-- Toast -->
    <link rel="stylesheet" href="{{asset('asset/scripts/toast/jquery.toast.min.css')}}">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="{{asset('asset/scripts/owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/scripts/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('asset/scripts/magnific-popup/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('asset/scripts/sweetalert/dist/sweetalert.css')}}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/skins/all.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/demo.css')}}">
</head>

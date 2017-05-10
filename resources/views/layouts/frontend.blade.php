<!DOCTYPE html>
<html ng-app="iFrame">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title><?php if( isset($title)  ) { echo $title; } else { echo  config('app.name', 'Partout'); } ?></title>

    <!-- Styles -->
    <link href="/{{ config('app.source') }}/frontend/assets/css/style.css" rel="stylesheet">
    <link href="/{{ config('app.source') }}/frontend/assets/css/responsive.css" rel="stylesheet">
    <link href="/{{ config('app.source') }}/frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/{{ config('app.source') }}/frontend/assets/css/animations.css" rel="stylesheet">
    <link href="/{{ config('app.source') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="/{{ config('app.source') }}/frontend/assets/css/style-fancybox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/{{ config('app.source') }}/frontend/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <!-- Scripts -->


    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-precomposed.png">
    <link rel="icon" href="/{{ config('app.source') }}/frontend/assets/ico/home.ico">
    <!-- Javascript -->
    <script src="/{{ config('app.source') }}/frontend/assets/js/jquery.min.js"></script>
    <script src="/{{ config('app.source') }}/frontend/assets/js/bootstrap.min.js"></script>
    <!-- <script src="docs/assets/js/holder.min.js"></script> -->
    <script src="/{{ config('app.source') }}/frontend/assets/js/custom.js"></script>
    <script src="/{{ config('app.source') }}/frontend/assets/js/css3-animate-it.js"></script>
    <script src="/{{ config('app.source') }}/frontend/assets/js/common.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery-confirm.js"></script>
    <script src="/{{ config('app.source') }}/frontend/assets/js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="/{{ config('app.source') }}/frontend/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="/{{ config('app.source') }}/frontend/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

    <script>

        // var _app = angular.module('iFrame', []);
        // _app.config(function($interpolateProvider) {
        //     $interpolateProvider.startSymbol('//');
        //     $interpolateProvider.endSymbol('//');
        // });

        window.Laravel = '<?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>';

        var base_url = '<?php echo url('/'); ?>';
    </script>
    @yield('style')

</head>
<body class="body_page">
<div class="wrapper dhv">
    @include('frontend.home.menu')
    <div class="clearfix"></div>
    <div class="full-page">
        <!-- content -->
        @yield('content')
    </div>
    @include('frontend.home.footer')
</div>
@yield('script')
</body>
</html>

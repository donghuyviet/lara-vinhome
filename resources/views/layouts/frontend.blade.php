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
    <link href="/{{ config('app.source') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/{{ config('app.source') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Scripts -->

    <script src="/{{ config('app.source') }}/js/jquery-3.1.1.min.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery-ui.min.js"></script>
    <script src="/{{ config('app.source') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery-toast.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery.validate.min.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery-confirm.js"></script>

    <script>

        var _app = angular.module('iFrame', []);
        _app.config(function($interpolateProvider) {
            $interpolateProvider.startSymbol('//');
            $interpolateProvider.endSymbol('//');
        })

        window.Laravel = '<?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>';

        var base_url = '<?php echo url('/'); ?>';
    </script>
    @yield('style')

</head>
<body >
<div class="container vdh" >
    @include('frontend.sidebar.menu')
    @include('frontend.slide.index')
    @yield('content')
</div>
@yield('script')
</body>
</html>

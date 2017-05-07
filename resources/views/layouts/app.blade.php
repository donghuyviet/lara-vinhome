<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title><?php if( isset($title)  ) { echo $title; } else { echo  config('app.name', 'Partout'); } ?></title>

    <!-- Styles -->
    <link href="/{{ config('app.source') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/{{ config('app.source') }}/admin/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="/{{ config('app.source') }}/css/pace.css" rel="stylesheet"> -->
    <!-- <link href="/{{ config('app.source') }}/css/jquery-toast.css" rel="stylesheet"> -->
    <!-- <link href="/{{ config('app.source') }}/css/jquery-confirm.css" rel="stylesheet"> -->
    <!-- <link href="/{{ config('app.source') }}/css/main.css" rel="stylesheet"> -->
    <link href="/{{ config('app.source') }}/admin/css/custom.min.css" rel="stylesheet">
    <link href="/{{ config('app.source') }}/css/bootstrap-datepicker3.css" rel="stylesheet">
    <!-- <link href="/{{ config('app.source') }}/fullcalendar/fullcalendar.min.css" rel="stylesheet"> -->

    <!-- Scripts -->

    <script src="/{{ config('app.source') }}/js/jquery-3.1.1.min.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery-ui.min.js"></script>
    <script src="/{{ config('app.source') }}/js/angular.min.js"></script>
    <script src="/{{ config('app.source') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="/{{ config('app.source') }}/js/pace.min.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery-toast.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery.validate.min.js"></script>
    <script src="/{{ config('app.source') }}/js/jquery-confirm.js"></script>
    <script src="/{{ config('app.source') }}/js/angular-dragdrop.min.js"></script>
    <script src="/{{ config('app.source') }}/js/angular-validate.min.js"></script>
    <script src="/{{ config('app.source') }}/js/angular-sanitize.js"></script>
    <script src="/{{ config('app.source') }}/admin/js/common.js"></script>



    
    <!-- <script src="/{{ config('app.source') }}/js/ajax.js"></script> -->
    <!-- <script src="/{{ config('app.source') }}/js/customize/notifications.js"></script> -->
    <!-- <script src="/{{ config('app.source') }}/js/socket.io.js"></script> -->
    <script src="/{{ config('app.source') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="/{{ config('app.source') }}/admin/plugin/ckeditor/ckeditor.js"></script>

    <script>

        var _app = angular.module('myApp', ['ngDragDrop','ngValidate','ngSanitize']);
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
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @if( ! Auth::guest())
                <input type="hidden" name="user_login_id" value="{{ Auth::user()->id }}">
                @endif
                @yield('content')
        
    </div>
</div>
<script src="/{{ config('app.source') }}/admin/js/custom.js"></script>
@yield('script')
</body>
</html>

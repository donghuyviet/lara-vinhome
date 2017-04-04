@extends('layouts.template')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="box">
                <div class="box-header">
                    Menu
                </div>
                <div class="box-content">
                    <ul>
                        <li><a href="/template/full-page">Full page</a></li>
                        <li><a href="/template/list">List</a></li>
                        <li><a href="/template/form">Form</a></li>
                        <li><a href="/template/button">Button</a></li>
                        <li><a href="/template/text">Text</a></li>
                        <li><a href="/template/ajax">Ajax</a></li>
                        <li><a href="/template/confirm">Confirm</a></li>
                        <li><a href="/template/icon">Icons</a></li>
                        <li><a href="/template/popupmessage">Popup message</a></li>
                        <li><a href="/template/model">model</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-10">
            <div class="box">
                <div class="box-header">
                    Popup message
                </div>
                <div class="box-content">
                    <button class="btn btn-primary" onclick="a()">Success</button>
                    <button class="btn btn-primary" onclick="b()">Error</button>
                    <button class="btn btn-primary" onclick="c()">Warning</button>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

    <script>
        function a(){
            _main.toast_succes('title', 'Successfully');
        }
        function b(){
            _main.toast_error('title', 'Error');
        }
        function c(){
            _main.toast_warning('title', 'Warning');
        }
    </script>









@endsection



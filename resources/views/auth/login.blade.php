@extends('layouts.app')

@section('content')
<div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
              <h1>Login Form</h1>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" placeholder="Email login" name="email" value="{{ old('email') }}" required autofocus />

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password" required/>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
                <a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div>
                  <h1><i class="fa fa-paw"></i> Vinhomes</h1>
                  <p>©2016 donghuyviet@gmail.com</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
@endsection

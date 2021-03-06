@extends('layouts.master')

@section('content')
<div class="container" ng-app="app">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <h1>Welcome.</h1>
            <div class="form-group">
                <a class="btn btn-block btn-facebook" href={{ route('facebook') }}>Connect with <strong>Facebook</strong></a>
                <span class="help-block text-center"><small>We will create your member profile using details from Facebook.</small></span>
            </div>

            <p class="seperator"> or </p>

            {{ Form::open(array('route' => 'sessions.store', 'id' => 'login-form', 'name' => 'form', 'autocomplete' => 'off', 'novalidate' => '')) }}

            <div class="form-group">
                <label for="email" class="control-label">Email address</label>
                {{ Form::email('email', NULL, array(
            		'class' => 'form-control',
            		'placeholder' => 'email@example.com',
            		'ng-model' => 'formData.email',
                    'required' => true
            	))}}
            </div>

            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                {{ Form::password('password', array(
                    'class' => 'form-control',
                    'ng-model' => 'formData.password',
                    'required' => true
                ))}}
            </div>

            <button type="submit" class="btn btn-block" ng-disabled="form.$invalid">Login</button>
            {{ Form::close() }}

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-link btn-sm"><a href={{ route('register') }}>Need an Account? Register Here.</a></button>
                <button type="submit" class="btn btn-block btn-link btn-sm"><a href={{ route('remind') }}>Forgot your password?</a></button>
            </div>
        </div>
    </div>
</div>
@stop
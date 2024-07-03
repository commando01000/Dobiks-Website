@php
    $languages = \App\Facades\UtilityFacades::languages();
    config([
        'captcha.sitekey' => Utility::getsettings('recaptcha_key'),
        'captcha.secret' => Utility::getsettings('recaptcha_secret'),
    ]);
@endphp
@extends('layouts.login.app')
@section('title', __('Sign in'))

@section('content')
    <div class="login-page-wrapper">
        <div class="login-container">
            <div class="login-row d-flex">
                <div class="login-col-12" style="margin: auto;">
                    <div class="login-content-inner ">
                        <div class="login-title">
                            <h3>{{ __('Sign In') }}</h3>
                        </div>
                        {{ Form::open(['route' => ['login'], 'method' => 'POST', 'data-validate', 'class' => 'needs-validation']) }}
                        <div class="mb-3 form-group">
                            {{ Form::label('email', __('Email'), ['class' => 'form-label mb-2']) }}
                            {!! Form::email('email', old('email'), [
                                'class' => 'form-control',
                                'id' => 'email',
                                'placeholder' => __('Enter email address'),
                                'onfocus',
                                'required',
                            ]) !!}
                        </div>
                        <div class="mb-3 form-group">
                            <div class="col-md-12">
                                {{ Form::label('password', __('Enter Password'), ['class' => 'form-label']) }}
                                {!! Form::password('password', [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter password'),
                                    'required',
                                    'tabindex' => '2',
                                    'id' => 'password',
                                    'autocomplete' => 'current-password',
                                ]) !!}
                            </div>
                        </div>
                        @if (Utility::getsettings('login_recaptcha_status') == '1')
                        <div class="my-3 text-center">
                            {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                        @endif
                        <div class="d-grid">
                            {!! Form::button(__('Sign In'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block mt-3']) !!}
                        </div>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

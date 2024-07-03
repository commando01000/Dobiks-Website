@extends('layouts.back.main')
@section('title', __('Landing Page'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Contact US Settings') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Contact US Settings') }}</li>
        </ul>
</div>@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card sticky-top">
                        <div class="list-group list-group-flush" id="useradd-sidenav">
                            @include('back.landing-page.landing-page-sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="card">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                {!! Form::open([
                                    'route' => ['landing.contactus.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'data-validate',
                                    'no-validate',
                                ]) !!}
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0">{{ __('Contact Us Setting') }}</h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                {!! Form::checkbox(
                                                    'contactus_setting_enable',
                                                    null,
                                                    Utility::getsettings('contactus_setting_enable') == 'on' ? true : false,
                                                    [
                                                        'class' => 'custom-control custom-switch form-check-input input-primary',
                                                        'id' => 'startViewSettingEnableBtn',
                                                        'data-onstyle' => 'primary',
                                                        'data-toggle' => 'switchbutton',
                                                    ],
                                                ) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_text', __('Contact text'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_text', Utility::getsettings('contact_text'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter contact text'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_email', __('Contact Email'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_email', Utility::getsettings('contact_email'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter contact email'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_city1', __('city one'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_city1', Utility::getsettings('contact_city1'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter city1'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_city2', __('city'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_city2', Utility::getsettings('contact_city2'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter city2'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_address', __('Address'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_address', Utility::getsettings('contact_address'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter address'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_address2', __('Address2'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_address2', Utility::getsettings('contact_address2'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter address2'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_phone1', __('Phone'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_phone1', Utility::getsettings('contact_phone1'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter Phone 1'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_phone2', __('Phone'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_phone2', Utility::getsettings('contact_phone2'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter Phone 2'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_facebook', __('facebook'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_facebook', Utility::getsettings('contact_facebook'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter facebook page'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_twitter', __('twitter'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_twitter', Utility::getsettings('contact_twitter'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter twitter page'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_instagram', __('instagram'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_instagram', Utility::getsettings('contact_instagram'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter instagram page'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_youtube', __('youtube'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_youtube', Utility::getsettings('contact_youtube'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter youtube page'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {{ Form::label('contact_linkedin', __('linkedin'), ['class' => 'col-form-label']) }}
                                                <div class="custom-input-group">
                                                    {!! Form::text('contact_linkedin', Utility::getsettings('contact_linkedin'), [
                                                        'class' => 'form-control',
                                                        'placeholder' => __('Enter linkedin page'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{ Form::label('latitude', __('Latitude'), ['class' => 'col-form-label']) }}
                                                    <div class="custom-input-group">
                                                        {!! Form::text('latitude', Utility::getsettings('latitude'), [
                                                            'class' => 'form-control',
                                                            'placeholder' => __('Enter latitude'),
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    {{ Form::label('longitude', __('Longitude'), ['class' => 'col-form-label']) }}
                                                    <div class="custom-input-group">
                                                        {!! Form::text('longitude', Utility::getsettings('longitude'), [
                                                            'class' => 'form-control',
                                                            'placeholder' => __('Enter longitude'),
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

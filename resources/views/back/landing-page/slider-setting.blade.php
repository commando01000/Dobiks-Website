@extends('layouts.back.main')
@section('title', __('Landing Page'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Slider Settings') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'),__('Dashboard'),['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Slider Settings') }}</li>
        </ul>
    </div>
@endsection
@section('content')

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
                            'route' => ['landing.slidersection1.store'],
                            'method' => 'Post',
                            'id' => 'froentend-form',
                            'enctype' => 'multipart/form-data',
                            'data-validate',
                            'no-validate',
                        ]) !!}
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-8 d-flex align-items-center">
                                    <h5 class="mb-0">{{ __('Slider 1') }}</h5>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-end">
                                    <div class="form-switch custom-switch-v1 d-inline-block">
                                        {!! Form::checkbox(
                                            'slider_setting_section1_enable',
                                            null,
                                            Utility::getsettings('slider_setting_section1_enable') == 'on' ? true : false,
                                            [
                                                'class' => 'custom-control custom-switch form-check-input input-primary',
                                                'id' => 'appsSettingEnableBtn',
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
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_image_section1', __('Slider Image'), ['class' => 'form-label']) }} *
                                        {!! Form::file('slider_image_section1', ['class' => 'form-control', 'id' => 'slider_image_section1']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_name_section1', __('Slider Name'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_name_section1', Utility::getsettings('slider_name_section1'), [
                                            'class' => 'form-control',
                                            'rows' => '1',
                                            'placeholder' => __('Enter slider name'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_bold_name_section1', __('Slider Bold Name'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_bold_name_section1', Utility::getsettings('slider_bold_name_section1'), [
                                            'class' => 'form-control',
                                            'rows' => '1',
                                            'placeholder' => __('Enter slider bold name'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_detail_section1', __('Slider Detail'), ['class' => 'form-label']) }}
                                        {!! Form::textarea('slider_detail_section1', Utility::getsettings('slider_detail_section1'), [
                                            'class' => 'form-control',
                                            'rows' => '3',
                                            'placeholder' => __('Enter slider detail'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_button_title_section1', __('Button Title'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_button_title_section1', Utility::getsettings('slider_button_title_section1'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter Button Title'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_button_url_section1', __('Button URL'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_button_url_section1', Utility::getsettings('slider_button_url_section1'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter Button URL'),
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-end">
                                {{ Form::button(__('Save'), ['type' => 'submit',  'class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                         aria-labelledby="landing-apps-setting">
                        {!! Form::open([
                            'route' => ['landing.slidersection2.store'],
                            'method' => 'Post',
                            'id' => 'froentend-form',
                            'enctype' => 'multipart/form-data',
                            'data-validate',
                            'no-validate',
                        ]) !!}
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-8 d-flex align-items-center">
                                    <h5 class="mb-0">{{ __('Slider 2') }}</h5>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-end">
                                    <div class="form-switch custom-switch-v1 d-inline-block">
                                        {!! Form::checkbox(
                                            'slider_setting_section2_enable',
                                            null,
                                            Utility::getsettings('slider_setting_section2_enable') == 'on' ? true : false,
                                            [
                                                'class' => 'custom-control custom-switch form-check-input input-primary',
                                                'id' => 'appsSettingEnableBtn',
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
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_image_section2', __('Slider Image'), ['class' => 'form-label']) }} *
                                        {!! Form::file('slider_image_section2', ['class' => 'form-control', 'id' => 'slider_image_section2']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_name_section2', __('Slider Name'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_name_section2', Utility::getsettings('slider_name_section2'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter slider name'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_bold_name_section2', __('Slider Bold Name'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_bold_name_section2', Utility::getsettings('slider_bold_name_section2'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter slider bold name'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_detail_section2', __('Slider Detail'), ['class' => 'form-label']) }}
                                        {!! Form::textarea('slider_detail_section2', Utility::getsettings('slider_detail_section2'), [
                                            'class' => 'form-control',
                                            'rows' => '3',
                                            'placeholder' => __('Enter slider detail'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_button_title_section2', __('Button Title'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_button_title_section2', Utility::getsettings('slider_button_title_section2'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter Button Title'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_button_url_section2', __('Button URL'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_button_url_section2', Utility::getsettings('slider_button_url_section2'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter Button URL'),
                                        ]) !!}
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
            <div class="card">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                         aria-labelledby="landing-apps-setting">
                        {!! Form::open([
                            'route' => ['landing.slidersection3.store'],
                            'method' => 'Post',
                            'id' => 'froentend-form',
                            'enctype' => 'multipart/form-data',
                            'data-validate',
                            'no-validate',
                        ]) !!}
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-8 d-flex align-items-center">
                                    <h5 class="mb-0">{{ __('Slider 3') }}</h5>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-end">
                                    <div class="form-switch custom-switch-v1 d-inline-block">
                                        {!! Form::checkbox(
                                            'slider_setting_section3_enable',
                                            null,
                                            Utility::getsettings('slider_setting_section3_enable') == 'on' ? true : false,
                                            [
                                                'class' => 'custom-control custom-switch form-check-input input-primary',
                                                'id' => 'appsSettingEnableBtn',
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
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_image_section3', __('Slider Image'), ['class' => 'form-label']) }} *
                                        {!! Form::file('slider_image_section3', ['class' => 'form-control', 'id' => 'slider_image_section3']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_name_section3', __('Slider Name'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_name_section3', Utility::getsettings('slider_name_section3'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter slider name'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_bold_name_section3', __('Slider Bold Name'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_bold_name_section3', Utility::getsettings('slider_bold_name_section3'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter slider bold name'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_detail_section3', __('Slider Detail'), ['class' => 'form-label']) }}
                                        {!! Form::textarea('slider_detail_section3', Utility::getsettings('slider_detail_section3'), [
                                            'class' => 'form-control',
                                            'rows' => '3',
                                            'placeholder' => __('Enter slider detail'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_button_title_section3', __('Button Title'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_button_title_section3', Utility::getsettings('slider_button_title_section3'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter Button Title'),
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('slider_button_url_section3', __('Button URL'), ['class' => 'form-label']) }}
                                        {!! Form::text('slider_button_url_section3', Utility::getsettings('slider_button_url_section3'), [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter Button URL'),
                                        ]) !!}
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

@endsection


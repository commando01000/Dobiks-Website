@extends('layouts.back.main')
@section('title', __('Landing Page'))
@section('breadcrumb')
<div class="col-md-12">
    <div class="page-header-title">
        <h4 class="m-b-10">{{ __('Page Settings') }}</h4>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
        <li class="breadcrumb-item">{{ __('Edit Page') }}</li>
    </ul>
</div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-7 col-lg-7 mx-auto">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="card">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                {!! Form::model($pageSettings, [
                                    'route' => ['pages.update', $pageSettings->id],
                                    'method' => 'patch',
                                    'id' => 'froentend-form',
                                ]) !!}
                                @method('put')
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0">{{ __('Page Setting') }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {{ Form::label('title', __('Page Title'), ['class' => 'form-label']) }}
                                                *
                                                {!! Form::text('title', $pageSettings->title, [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enter Page Title',
                                                    'id' => 'title',
                                                ]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::label('description', __('Footer Sub menu Detail'), ['class' => 'form-label']) }}
                                                {!! Form::textarea('descriptions', $pageSettings->description, [
                                                    'class' => 'form-control',
                                                    'rows' => '2',
                                                    'placeholder' => __('Enter Sub Menu detail'),
                                                ]) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::label('body', __('Footer Sub menu Detail'), ['class' => 'form-label']) }}
                                                {!! Form::textarea('body', $pageSettings->body, [
                                                    'class' => 'form-control',
                                                    'rows' => '2',
                                                    'placeholder' => __('Enter Sub Menu detail'),
                                                ]) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <a href="{{ route('pages.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                                        {{ Form::button(__('Save'), ['type' => 'submit', 'id' => 'save-btn', 'class' => 'btn btn-primary']) }}
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
@push('script')
<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });


    </script>
@endpush

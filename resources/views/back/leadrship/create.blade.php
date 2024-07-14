@extends('layouts.back.main')
@section('title', 'Create Leadership')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Create Leadership') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('leadership.index') }}">{{ __('Leadership') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Leadership') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> {{ __('Create Leadership') }}</h5>
                    </div>
                    {!! Form::open([
                        'route' => 'leadership.store',
                        'method' => 'Post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]) !!}
                    <div class="card-body">
                        <div class="row">



                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('name', __('Name'), ['class' => 'form-label']) }} *
                                    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => __('Enter Name'),'required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('position', __('position'), ['class' => 'form-label']) }} *
                                    {!! Form::text('position', null, ['class' => 'form-control','placeholder' => __('Enter Position'),'required' => 'required']) !!}
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('photo', __('Photo'), ['class' => 'form-label']) }} *
                                    {!! Form::file('photo', ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('bio', __('Bio'), ['class' => 'form-label']) }} *
                                    {!! Form::textarea('bio', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter Bio'),
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            {!! Html::link(route('leadership.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                            {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
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
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }
        });
    </script>
@endpush

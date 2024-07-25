@extends('layouts.back.main')
@section('title', 'Create Project')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Create Project') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('project-category.index') }}">{{ __('Project') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Project') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> {{ __('Create Project') }}</h5>
                    </div>
                    {!! Form::open([
                        'route' => 'projects.store',
                        'method' => 'Post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">

                                    <div class="col-sm-10">
                                        <strong class="d-block">{{ __('Page Builder') }}</strong>
                                    </div>
                                    <div class="col-sm-2 form-check form-switch custom-switch-v1">
                                        <div class="form-switch custom-switch-v1 d-inline-block">
                                            {!! Form::checkbox('builder', null, Utility::getsettings('builder') == 'on' ? true : false, [
                                                'class' => 'custom-control custom-switch form-check-input input-primary',
                                                'id' => 'startViewSettingEnableBtn',
                                                'data-onstyle' => 'primary',
                                                'data-toggle' => 'switchbutton',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('title', __('Title'), ['class' => 'form-label']) }} *
                                    {!! Form::text('title', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter title'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('client', __('Client Name'), ['class' => 'form-label']) }}
                                    {!! Form::text('client', null, ['class' => 'form-control', 'placeholder' => __('Enter Client Name')]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('project_location', __('Project Location'), ['class' => 'form-label']) }}
                                    {!! Form::text('project_location', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Project Location'),
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('project_timeframe', __('Project Timeframe'), ['class' => 'form-label']) }}
                                    {!! Form::text('project_timeframe', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Project Timeframe'),
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('project_date', __('Project Date'), ['class' => 'form-label']) }}
                                    {!! Form::text('project_date', null, ['class' => 'form-control', 'placeholder' => __('Enter Project Date')]) !!}
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('Embed', __('Embed'), ['class' => 'form-label']) }}
                                    {!! Form::text('embed', null, ['class' => 'form-control', 'placeholder' => __('Enter video embed ')]) !!}
                                </div>
                            </div> --}}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('project_category', __('Project Category'), ['class' => 'form-label']) }}
                                    <select name="category_id" id="" class="form-control" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('project_status', __('Project Status'), ['class' => 'form-label']) }}
                                    {!! Form::text('project_status', null, ['class' => 'form-control','placeholder' => __('Enter Project Status')]) !!}
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('images', __('cover'), ['class' => 'form-label']) }} *
                                    {!! Form::file('cover', ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('images', __('Images'), ['class' => 'form-label']) }}
                                    {!! Form::file('images[]', ['class' => 'form-control', 'multiple' => 'multiple']) !!}
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('description', __('Short Description'), ['class' => 'form-label']) }}
                                    *
                                    {!! Form::textarea('description', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter short description'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('body', __('Optional Field'), ['class' => 'form-label']) }} 
                                    {!! Form::textarea('body', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter Optional Field'),
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            {!! Html::link(route('projects.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
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

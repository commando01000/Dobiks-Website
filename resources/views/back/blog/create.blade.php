@extends('layouts.back.main')
@section('title', 'Create Blog')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Create Blog') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('blog-category.index') }}">{{ __('Blog') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Blog') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ __('Create Blog') }}</h5>
                    </div>
                    {!! Form::open([
                        'route' => 'blog.store',
                        'method' => 'Post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]) !!}
                    <div class="card-body">
                        @foreach ($allLanguages as $localeCode => $language)
                            <div class="row mb-5 p-3 rounded-3" style="background-color: rgb(235, 233, 233) !important">
                                <div class="col-sm-12">
                                    <h4>{{ $language }}</h4>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('title', __('Title'), ['class' => 'form-label']) }} *
                                        {!! Form::text('title_' . $localeCode, null, [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter title'),
                                            'required' => 'required',
                                        ]) !!}
                                    </div>
                                </div>
                                @if ($localeCode == 'en')
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('category_id', __('Category'), ['class' => 'form-label']) }}
                                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'required', 'data-trigger']) !!}
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-12">
                                        <div class="form-group">
                                            {{ Form::label('images', __('Images'), ['class' => 'form-label']) }} *
                                            {!! Form::file('images', ['class' => 'form-control', 'required' => 'required']) !!}
                                        </div>
                                    </div> --}}
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('short_description', __('Short Description'), ['class' => 'form-label']) }}
                                        *
                                        {!! Form::textarea('short_description_' . $localeCode, null, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter short description'),
                                            'required' => 'required',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('normal_description', __('Normal Description'), ['class' => 'form-label']) }}
                                        *
                                        {!! Form::textarea('normal_description_' . $localeCode, null, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter normal description'),
                                            'required' => 'required',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('body_' . $localeCode, __('Description (' . $language . ')'), ['class' => 'form-label']) }}
                                        *
                                        {!! Form::textarea('description_' . $localeCode, null, [
                                            'class' => 'form-control',
                                            'placeholder' => __('Enter description (' . $language . ')'),
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            {!! Html::link(route('blog.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
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
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }

            @foreach ($allLanguages as $localeCode => $language)
                CKEDITOR.replace('description_{{ $localeCode }}', {
                    filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form'
                });
            @endforeach
        });
    </script>
@endpush

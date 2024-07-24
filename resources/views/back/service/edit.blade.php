@extends('layouts.back.main')
@section('title', 'edit Service')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('edit Service') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('service-category.index') }}">{{ __('Service') }}</a></li>
            <li class="breadcrumb-item active">{{ __('edit Service') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> {{ __('edit Service') }}</h5>
                    </div>
                    {!! Form::open([
                        'route' => ['services.update', 'service' => $service->id],
                        'method' => 'PUT',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]) !!}
                    <div class="card-body">
                        <div class="row">


                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('title', __('Title'), ['class' => 'form-label']) }} *
                                    {!! Form::text('title', $service->title, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter title'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('slug', __('Slug'), ['class' => 'form-label']) }} *
                                    {!! Form::text('slug', $service->slug, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter slug'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>




                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('service_category', __('Service Category'), ['class' => 'form-label']) }}
                                    <select name="category_id" id="" class="form-control" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($service->service_category == $category->id) {{ 'selected' }} @endif>
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
                                    {!! Form::file('cover', ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('emdlink', __('Embed Link'), ['class' => 'form-label']) }} *
                                    {!! Form::text('emdlink', $service->emdlink, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Embed Link'),
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('description', __('Short Description'), ['class' => 'form-label']) }}
                                    *
                                    {!! Form::textarea('short_description', $service->short_description, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter short description'),
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('body', __('Description'), ['class' => 'form-label']) }} *
                                    {!! Form::textarea('body', $service->description, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter description'),
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            {!! Html::link(route('services.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
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

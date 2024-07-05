@extends('layouts.back.main')
@section('title', __('Landing Page'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Page Settings') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Create Page') }}</li>
        </ul>
    </div>
@endsection
@section('content')


    <div id="editor" contenteditable="true"></div>
    <button id="saveButton">حفظ التغييرات</button>


    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-7 col-lg-7 mx-auto">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="card">
                            <div class="tab-pane fade show active" id="apps-setting" role="tabpanel"
                                aria-labelledby="landing-apps-setting">
                                {!! Form::open([
                                    'route' => ['pages.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                ]) !!}
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0">{{ __('Page Setting') }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @foreach ($allLanguages as $localeCode => $language)
                                        <div class="row mb-5 p-3  rounded-3"
                                            style="background-color: rgb(235, 233, 233) !important">
                                            <div class="col-sm-12">
                                                <h4>{{ $language }}</h4>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    {{ Form::label('title', __('Title'), ['class' => 'form-label']) }}
                                                    *
                                                    {!! Form::text('title_' . $localeCode, null, [
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Enter Page Title',
                                                        'id' => 'title',
                                                    ]) !!}
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {{ Form::label('description', __('Page Description'), ['class' => 'form-label']) }}
                                                    {!! Form::textarea('descriptions_' . $localeCode, null, [
                                                        'class' => 'form-control',
                                                        'rows' => '2',
                                                        'placeholder' => __('Enter Page Description'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {{ Form::label('body', __('Page Detail'), ['class' => 'form-label']) }}
                                                    {!! Form::textarea('body_' . $localeCode, null, [
                                                        'class' => 'form-control',
                                                        'rows' => '1',
                                                        'placeholder' => __('Enter Page body'),
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <a href="{{ route('pages.index') }}"
                                            class="btn btn-secondary">{{ __('Cancel') }}</a>
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
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>

    <script>
        $(document).ready(function() {
            $.get("/public/html/about.html", function(data) {
                $("#editor").html(data);
                //                var bodyContent = $(data).find("body").html();
                //                $("#editor").html(bodyContent);
            });
            $("#saveButton").click(function() {
                var editedContent = $("#editor").html();

                console.log(editedContent);
            });
        });
    </script>
@endpush

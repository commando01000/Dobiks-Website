@extends('layouts.back.main')
@section('title', __('Create Faq'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Create Faq') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
            <li class="breadcrumb-item">{!! Html::link(route('faqs.index'), __('Faqs'), ['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Create Faq') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="col-md-6 m-auto">
                <div class="card ">
                    <div class="card-header">
                        <h5> {{ __('Create Faq') }}</h5>
                    </div>
                    {!! Form::open(['route' => 'faqs.store', 'method' => 'Post', 'data-validate']) !!}
                    @foreach ($allLanguages as $localeCode => $language)
                        <div class="card-body">
                            <div class="row mb-5 p-3  rounded-3" style="background-color: rgb(235, 233, 233) !important">
                                <div class="col-sm-12">
                                    <h4>{{ $language }}</h4>
                                </div>
                                <div class="form-group ">
                                    {{ Form::label('questions', __('questions'), ['class' => 'form-label']) }}
                                    {!! Form::text('questions_' . $localeCode, null, [
                                        'class' => 'form-control',
                                        ' required',
                                        'placeholder' => __('Enter questions'),
                                    ]) !!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('answer', __('Answer'), ['class' => 'form-label']) }}
                                    {!! Form::textarea('answer_' . $localeCode, null, [
                                        'class' => 'form-control',
                                        'data-trigger',
                                        'required',
                                        'placeholder' => __('Enter answer Address'),
                                    ]) !!}
                                </div>
                                @if ($localeCode == 'en')
                                    <div class="form-group">
                                        {{ Form::label('order', __('Order'), ['class' => 'form-label']) }}
                                        {!! Form::number('order', null, ['placeholder' => __('Enter order'), 'class' => 'form-control', 'required']) !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <div class="card-footer">
                        <div class="btn-flt float-end mb-3">
                            {!! Html::link(route('faqs.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
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
@endpush

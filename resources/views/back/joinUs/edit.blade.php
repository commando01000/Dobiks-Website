@extends('layouts.back.main')
@section('title', 'Edit CV')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Edit CV') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('join.index') }}">{{ __('CV') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Edit CV') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5>{{ __('Edit CV') }}</h5>
                    {!! Form::model($join, [
                        'route' => ['join.update', $join->id],
                        'method' => 'PUT',
                        'data-validate',
                    ]) !!}
                </div>
                <div class="card-body">
                    <div class="form-group">
                        {{ Form::label('name', __('Name'), ['class' => 'form-label']) }}
                        {!! Form::text('name', null, ['placeholder' => __('Enter name'), 'class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', __('Email'), ['class' => 'form-label']) }}
                        {!! Form::text('email', null, ['placeholder' => __('Enter Email'), 'class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('name', __('Address'), ['class' => 'form-label']) }}
                        {!! Form::text('address', null, ['placeholder' => __('Enter Address'), 'class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('phone', __('Phone'), ['class' => 'form-label']) }}
                        {!! Form::text('phone', null, ['placeholder' => __('Enter Phone'), 'class' => 'form-control', 'required']) !!}
                    </div>

                </div>
                <div class="card-footer">
                    <div class="text-end">
                        {!! Html::link(route('join.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                        {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

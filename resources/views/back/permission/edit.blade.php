@extends('layouts.back.main')
@section('title', 'Edit Permission')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Edit Permission') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('permission.index') }}">{{ __('permissions') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Edit Permission') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    {!! Form::model($permission, [
                        'route' => ['permission.update', $permission->id],
                        'method' => 'Put',
                    ]) !!}
                </div>
                <div class="card-body">
                    <div class="form-group">

                        {{ Form::label('name', __('Enter first name'), ['class' => 'form-label']) }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}

                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        {{ Form::button(__('Cancel'), ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']) }}
                        {!! Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}



            </div>
        </div>
    </div>
@endsection

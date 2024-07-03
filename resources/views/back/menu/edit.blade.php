@extends('layouts.back.main')
@section('title', __('Landing Page'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Menu Settings') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Menu Settings') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if($Menu->type == 'link')
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5>{{ __('Link') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'menu.update',
                        'method' => 'Post',
                        'class' => 'form-horizontal',
                        'data-validate',
                        'no-validate',
                    ]) !!}
                    <input type="hidden" value="{{$Menu->id}}" name="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('slug', __('Full url'), ['class' => 'form-label']) }}
                                {!! Form::text('slug', $Menu->slug, [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter url'),
                                ]) !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('title', __('Link Title'), ['class' => 'form-label']) }}
                                {!! Form::text('title', $Menu->title, [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter Link Title'),
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('page_id', __('Select Page'), ['class' => 'form-label']) }}
                                <select name="parent_id" class="form-control">
                                    <option value="0">{{__('Main link')}}</option>
                                    @foreach($MainMenus as $k=>$record)
                                        <option value="{{$record['id']}}" @if($Menu->parent_id == $record['id']) selected @endif>{{__('Sub-link below')}} ({{$record['title']}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            @endif
            @if($Menu->type == 'page')
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5>{{ __('Pages') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'menu.update',
                        'method' => 'Post',
                        'class' => 'form-horizontal',
                        'data-validate',
                        'no-validate',
                    ]) !!}
                    <input type="hidden" value="{{$Menu->id}}" name="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('parent_id', __('Select Page'), ['class' => 'form-label']) }}
                                <select name="parent_id" class="form-control">
                                    <option value="0">{{__('Main link')}}</option>
                                    @foreach($MainMenus as $k=>$record)
                                        <option value="{{$record['id']}}" @if($Menu->parent_id == $record['id']) selected @endif>{{__('Sub-link below')}} ({{$record['title']}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            @endif

            @if($Menu->type == 'system')
                <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5>{{ __('Pages') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'menu.update',
                        'method' => 'Post',
                        'class' => 'form-horizontal',
                        'data-validate',
                        'no-validate',
                    ]) !!}
                    <input type="hidden" value="{{$Menu->id}}" name="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('title', __('Link Title'), ['class' => 'form-label']) }}
                                {!! Form::text('title', $Menu->title, [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter Link Title'),
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('parent_id', __('Select Page'), ['class' => 'form-label']) }}
                                <select name="parent_id" class="form-control">
                                    <option value="0">{{__('Main link')}}</option>
                                    @foreach($MainMenus as $k=>$record)
                                        <option value="{{$record['id']}}" @if($Menu->parent_id == $record['id']) selected @endif>{{__('Sub-link below')}} ({{$record['title']}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            @endif

        </div>
    </div>
@endsection

@push('style')
@endpush
@push('script')

@endpush

@extends('layouts.back.main')
@section('title', __('leaderships'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('leaderships') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('leadership details') }}</li>
        </ul>

    </div>
@endsection

@section('content')

    <main class="container">
        <div class="row">
            <div class="section-body">
                <div class="m-auto col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5> {{ __('Edit leadership') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('name', __('Name'), ['class' => 'form-label']) }} *
                                        {!! Form::text('name', $leadership->name, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('position', __('Position'), ['class' => 'form-label']) }} *
                                        {!! Form::text('position', $leadership->position, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            {{ Form::label('category_id', __('Category'), ['class' => 'form-label']) }}
                                            @php
                                                $categoryName = $leadership->category->name ?? 'Default Category';
                                            @endphp
                                            {!! Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if ($leadership->photo)
                                            <div>
                                                <strong>Current Image:</strong><br>
                                                <img src="{{ Storage::url($leadership->photo) }}" alt="leadership Image"
                                                    style="width: auto !important; height: 300px !important;">
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('bio', __('bio'), ['class' => 'form-label']) }} *
                                        {{-- text area --}}
                                        {!! Form::textarea('bio', $leadership->bio, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('facebook', __('facebook'), ['class' => 'form-label']) }} *
                                    {!! Form::text('facebook', $leadership->facebook, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('twitter', __('twitter'), ['class' => 'form-label']) }} *
                                    {!! Form::text('twitter', $leadership->twitter, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('github', __('github'), ['class' => 'form-label']) }} *
                                    {!! Form::text('github', $leadership->github, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('linkedin', __('linkedin'), ['class' => 'form-label']) }} *
                                    {!! Form::text('linkedin', $leadership->linkedin, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('dribble', __('dribble'), ['class' => 'form-label']) }} *
                                    {!! Form::text('dribble', $leadership->dribble, [
                                        'class' => 'form-control',
                                        'disabled',
                                    ]) !!}
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('categories', __('categories'), ['class' => 'form-label']) }} *
                                    @foreach ($leadership->details as $detail)
                                        {!! Form::text('dribble', $detail->category . ' ' . $detail->number, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    @endforeach
                                </div>
                            </div>

                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    @foreach ($leadership->details as $detail)
                                        {{ Form::label('number', __('Number'), ['class' => 'form-label']) }} *
                                        {!! Form::text('number', $detail->number, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    @endforeach
                                </div>
                            </div> --}}

                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                {!! Html::link(route('leadership.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                                {{-- {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }} --}}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

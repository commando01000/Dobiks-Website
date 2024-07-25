@extends('layouts.back.main')

@section('title', __('Blogs'))

@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Projects') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Projects') }}</li>
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
                            <h5> {{ __('Edit Project') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('title', __('Title'), ['class' => 'form-label']) }} *
                                        {!! Form::text('title', $project->title, [
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
                                                $categoryName = $project->category->name ?? 'Default Category';
                                            @endphp
                                            {!! Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if ($project->images)
                                            <div>
                                                <strong>Current Image:</strong><br>
                                                <img src="{{ Storage::url($project->cover) }}" alt="project Image"
                                                    style="max-width: 100%; height: 300px !important;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('client', __('client'), ['class' => 'form-label']) }} *
                                        {!! Form::text('client', $project->client, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('body', __('Description'), ['class' => 'form-label']) }} *
                                        <?php

                                        $var = html_entity_decode($project->description);

                                        ?>
                                        {!! Form::textarea('description', $var, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter description'),
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('project_date', __('Project Date'), ['class' => 'form-label']) }} *
                                        {!! Form::text('project date', $project->project_date, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('project_timeframe', __('Project time frame'), ['class' => 'form-label']) }}
                                        *
                                        {!! Form::text('project time frame', $project->project_timeframe, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('project_location', __('Project Location'), ['class' => 'form-label']) }}
                                        *
                                        {!! Form::text('project project_location', $project->project_location, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('body', __('Optional Field '), ['class' => 'form-label']) }} *
                                        <?php



                                        ?>
                                        {!! Form::textarea('body', $project->body, [
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

@extends('layouts.back.main')

@section('title', 'Create Project')


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
                                        {!! Form::text('title', $service->title, [
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
                                                $categoryName = $service->category->name ?? 'Default Category';
                                            @endphp
                                            {!! Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if ($service->images)
                                            <div>
                                                <strong>Current Image:</strong><br>
                                                <img src="{{ Storage::url($service->cover) }}" alt="service Image"
                                                    style="max-width: 100%; height: 300px !important;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('client', __('client'), ['class' => 'form-label']) }} *
                                        {!! Form::text('client', $service->client, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('short_description', __('Short Description'), ['class' => 'form-label']) }}
                                        *
                                        {!! Form::textarea('short_description', $service->short_description, [
                                            'class' => 'form-control ',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('body', __('Description'), ['class' => 'form-label']) }} *
                                        <?php

                                        $var = html_entity_decode($service->description);

                                        ?>
                                        {!! Form::textarea('body', $var, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter description'),
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('body', __('emdlink'), ['class' => 'form-label']) }} *
                                        <br>
                                        <?php

                                        $var = html_entity_decode($service->emdlink);
                                        echo $var;
                                        ?>
                                    </div>
                                </div>

                               

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                {!! Html::link(route('services.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
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

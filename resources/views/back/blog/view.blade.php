@extends('layouts.back.main')

@section('title', __('Blogs'))

@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Blogs') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Blogs') }}</li>
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
                            <h5> {{ __('Edit Blog') }}</h5>
                        </div>
                        {!! Form::model($blog, [
                            'route' => ['blog.update', $blog->id],
                            'method' => 'Patch',
                            'class' => 'form-horizontal',
                            'data-validate',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('title', __('Title'), ['class' => 'form-label']) }} *
                                        {!! Form::text('title', $blog->title, [
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
                                                $categoryName = $blog->category->name ?? 'Default Category';
                                            @endphp
                                            {!! Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('short_description', __('Short Description'), ['class' => 'form-label']) }}
                                        *
                                        {!! Form::textarea('short_description', null, [
                                            'class' => 'form-control ',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('normal_description', __('Normal Description'), ['class' => 'form-label']) }}
                                        *
                                        {!! Form::textarea('normal_description', null, [
                                            'class' => 'form-control ',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('description', __('Description'), ['class' => 'form-label']) }} *
                                        <?php

                                        $var = html_entity_decode($blog->description);

                                        echo $var;

                                        ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                {!! Html::link(route('blog.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
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

@extends('layouts.back.main')
@section('title', __('Clients'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Clients') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('client details') }}</li>
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
                            <h5> {{ __('Edit client') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('name', __('Name'), ['class' => 'form-label']) }} *
                                        {!! Form::text('name', $client->name, [
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
                                                $categoryName = $client->category->name ?? 'Default Category';
                                            @endphp
                                            {!! Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if ($client->cover)
                                            <div>
                                                <strong>Current Image:</strong><br>
                                                <img src="{{ Storage::url($client->cover) }}" alt="client Image"
                                                    style="width: 60px !important; height: 300px !important;">
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('description', __('Description'), ['class' => 'form-label']) }} *
                                        {{-- text area --}}
                                        {!! Form::textarea('description', $client->description, ['class' => 'form-control', 'disabled']) !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                {!! Html::link(route('customer.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
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

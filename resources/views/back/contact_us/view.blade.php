@extends('layouts.back.main')
@section('title', __('Contact_us'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('contact_us') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Contact_us') }}</li>
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
                            <h5> {{ __('View contact') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('name', __('Name'), ['class' => 'form-label']) }} *
                                        {!! Form::text('name', $contact->firstname . ' ' . $contact->lastname, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('email', __('Email'), ['class' => 'form-label']) }} *
                                        {!! Form::text('email', $contact->email, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('subject', __('Subject'), ['class' => 'form-label']) }} *
                                        {!! Form::text('subject', $contact->subject, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('description', __('Description'), ['class' => 'form-label']) }} *
                                        {{-- text area --}}
                                        {!! Form::textarea('description', $contact->comments, ['class' => 'form-control', 'disabled']) !!}
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

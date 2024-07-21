@extends('layouts.back.main')
@section('title', __('Edit Leadership'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Edit Leadership') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
            <li class="breadcrumb-item">{!! Html::link(route('leadership.index'), __('Leadership'), ['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Edit Leadership') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="col-md-6 m-auto">
                <div class="card ">
                    <div class="card-header">
                        <h5> {{ __('Edit Leadership') }}</h5>
                    </div>
                    {!! Form::model($leadership, [
                        'route' => ['leadership.update', $leadership->id],
                        'method' => 'post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]) !!}


                    <div class="card-body">
                        <div class="row">



                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('name', __('Name'), ['class' => 'form-label']) }} *
                                    {!! Form::text('name', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Name'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('position', __('position'), ['class' => 'form-label']) }} *
                                    {!! Form::text('position', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Position'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('photo', __('Photo'), ['class' => 'form-label']) }} *
                                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                                    @if (isset($leadership->photo))
                                        <img src="{{ Illuminate\Support\Facades\Storage::url($leadership->photo) }}"
                                            width="100" height="100" alt="" class="mt-2">
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('facebook', __('Facebook'), ['class' => 'form-label']) }}
                                    {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => __('Enter Facebook Link')]) !!}

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('twitter', __('Twitter'), ['class' => 'form-label']) }}
                                    {!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => __('Enter Twitter Link')]) !!}

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('linkedin', __('Linkedin'), ['class' => 'form-label']) }}
                                    {!! Form::text('linkedin', null, ['class' => 'form-control', 'placeholder' => __('Enter Linkedin Link')]) !!}

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('github', __('Github'), ['class' => 'form-label']) }}
                                    {!! Form::text('github', null, ['class' => 'form-control', 'placeholder' => __('Enter Github Link')]) !!}

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('dribble', __('Dribble'), ['class' => 'form-label']) }}
                                    {!! Form::text('dribble', null, ['class' => 'form-control', 'placeholder' => __('Enter Dribble Link')]) !!}

                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('bio', __('Bio'), ['class' => 'form-label']) }} *
                                    {!! Form::textarea('bio', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter Bio'),
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-flt float-end mb-3">
                            {!! Html::link(route('leadership.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                            {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('style')
    <link href="{{ asset('vendor/jqueryform/css/jquery.rateyo.min.css') }}" rel="stylesheet" />
@endpush
@push('script')
    <script src="{{ asset('vendor/jqueryform/js/jquery.rateyo.min.js') }}"></script>
    <script>
        var $starRating = $('.starRating');
        if ($starRating.length) {
            $starRating.each(function() {
                var val = $(this).attr('data-value');
                var num_of_star = $(this).attr('data-num_of_star');
                $(this).rateYo({
                    rating: val,
                    halfStar: true,
                    numStars: num_of_star,
                    precision: 2,
                    onSet: function(rating, rateYoInstance) {
                        num_of_star = $(rateYoInstance.node).attr('data-num_of_star');
                        var input = ($(rateYoInstance.node).attr('id'));
                        if (num_of_star == 10) {
                            rating = rating * 2;
                        }
                        $('input[name="' + input + '"]').val(rating);
                    }
                })
            });
        }
    </script>
@endpush

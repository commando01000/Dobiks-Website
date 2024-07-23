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
                            <div class="container py-4">
                                <div class="row">
                                    <div class="col-md-12 form_sec_outer_task border">
                                        <div class="row">
                                            <div class="col-md-12 bg-light p-2 mb-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4 class="frm_section_n">{{ __('statistic') }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>{{ __('Category') }}</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>{{ __('Number') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="col-md-12 form_field_outer p-0">
                                                @foreach ($leadership->details as $index => $detail)
                                                    <div class="row form_field_outer_row">
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control w_90"
                                                                name="details[{{ $index }}][category]"
                                                                id="category_{{ $index }}"
                                                                placeholder="Enter category"
                                                                value="{{ old('details.' . $index . '.category', $detail->category) }}" />
                                                            @error('details.' . $index . '.category')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <input type="text" class="form-control"
                                                                name="details[{{ $index }}][number]"
                                                                id="number_{{ $index }}" placeholder="Enter number"
                                                                value="{{ old('details.' . $index . '.number', $detail->number) }}" />
                                                            @error('details.' . $index . '.number')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <input type="hidden" name="details[{{ $index }}][id]"
                                                            value="{{ $detail->id }}" />
                                                        <div class="form-group col-md-2 add_del_btn_outer">

                                                            <button class="btn_round remove_node_btn_frm_field">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row ml-0 bg-light mt-3 border py-3">
                                            <div class="col-md-12">
                                                <button class="btn btn-outline-lite py-0 add_new_frm_field_btn"><i
                                                        class="fas fa-plus add_icon"></i> Add New field row</button>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });

        $(document).ready(function() {
            // Clone method


            // Add new form field row
            $("body").on("click", ".add_new_frm_field_btn", function(e) {
                e.preventDefault();
                var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
                $(".form_field_outer").append(`
                    <div class="row form_field_outer_row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control w_90" name="details[${index}][category]" id="category_${index}" placeholder="Enter category" />
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="details[${index}][number]" id="number_${index}" placeholder="Enter number" />
                        </div>
                        <input type="hidden" name="details[${index}][id]" />
                        <div class="form-group col-md-2 add_del_btn_outer">
                           
                            <button class="btn_round remove_node_btn_frm_field" disabled>
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                `);
                $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled",
                    false);
                $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
            });

            // Remove form field row
            $("body").on("click", ".remove_node_btn_frm_field", function(e) {
                e.preventDefault();
                $(this).closest(".form_field_outer_row").remove();
            });
        });
    </script>
@endpush

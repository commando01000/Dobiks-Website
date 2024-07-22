@extends('layouts.back.main')
@section('title', __('Create Statistics'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Create Statistics') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('statistics.index') }}">{{ __('Statistics') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Statistics') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ __('Create Statistics') }}</h5>
                    </div>
                    {!! Form::model(null, [
                        'route' => ['statistics.store'],
                        'method' => 'Post',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]) !!}

                    <div class="container py-4">
                        <div class="row">
                            <div class="col-md-12 form_sec_outer_task border">
                                <div class="row">
                                    <div class="col-md-12 bg-light p-2 mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="frm_section_n">{{ __('Statistics') }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('Category') }} *</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>{{ __('Number') }} *</label>
                                    </div>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="col-md-12 form_field_outer p-0">
                                        <div class="row form_field_outer_row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control w_90" name="details[0][category]"
                                                    id="category_1" placeholder="Enter category" required />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control" name="details[0][number]"
                                                    id="number_1" placeholder="Enter number" required />
                                            </div>
                                            <div class="form-group col-md-2 add_del_btn_outer">
                                                <button type="button" class="btn_round add_node_btn_frm_field"
                                                    title="Copy or clone this row">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                                <button type="button" class="btn_round remove_node_btn_frm_field" disabled>
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 bg-light mt-3 border py-3">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-outline-lite py-0 add_new_frm_field_btn"><i
                                                class="fas fa-plus add_icon"></i>{{ __('Add New field row') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 bg-light p-2 mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="frm_section_n">{{ __('Optional Fields') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('title', __('Title'), ['class' => 'form-label']) }}
                                    {!! Form::text('title', null, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter title'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('body', __('Short Description'), ['class' => 'form-label']) }}
                                    {!! Form::textarea('short_description', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter short description'),
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('body', __('Description'), ['class' => 'form-label']) }}
                                    {!! Form::textarea('description', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter description'),
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            {!! Html::link(route('statistics.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                            {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });

        $(document).ready(function() {
            // Clone method
            $("body").on("click", ".add_node_btn_frm_field", function(e) {
                e.preventDefault();
                var index = $(e.target).closest(".form_field_outer").find(".form_field_outer_row").length +
                    1;
                var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);
                cloned_el.find("input").val(''); // Clear the values of cloned elements
                $(e.target).closest(".form_field_outer").append(cloned_el);
                $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled",
                    false);
                $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
                cloned_el.find("input[type='text']").each(function() {
                    var oldId = $(this).attr('id');
                    var newId = oldId.split('_')[0] + '_' + index;
                    $(this).attr('id', newId);
                });
            });

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
                            <button type="button" class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                                <i class="fas fa-copy"></i>
                            </button>
                            <button type="button" class="btn_round remove_node_btn_frm_field">
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

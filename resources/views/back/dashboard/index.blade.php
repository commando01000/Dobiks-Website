@php
    $user_theme = \Auth::user();
    $color = $user_theme->theme_color;
    $chatcolor = '#145388';
    if ($color == 'theme-1') {
        $chatcolor = '#0CAF60';
    } elseif ($color == 'theme-2') {
        $chatcolor = '#584ED2';
    } elseif ($color == 'theme-3') {
        $chatcolor = '#6FD943';
    } elseif ($color == 'theme-4') {
        $chatcolor = '#145388';
    } elseif ($color == 'theme-5') {
        $chatcolor = '#B9406B';
    } elseif ($color == 'theme-6') {
        $chatcolor = '#008ECC';
    } elseif ($color == 'theme-7') {
        $chatcolor = '#922C88';
    } elseif ($color == 'theme-8') {
        $chatcolor = '#C0A145';
    } elseif ($color == 'theme-9') {
        $chatcolor = '#48494B';
    } elseif ($color == 'theme-10') {
        $chatcolor = '#0C7785';
    }
@endphp
@extends('layouts.back.main')
@section('title', __('Dashboard'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Dashboard') }}</h4>
        </div>
    </div>
@endsection
@section('content')

@endsection
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/dragdrop/dragula.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/datepicker-bs5.min.css') }}">
@endpush
@push('script')
    <script src="{{ asset('vendor/apex-chart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/dragdrop/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('vendor/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datepicker-full.min.js') }}"></script>


    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).attr('data-url')).select();
            document.execCommand("copy");
            $temp.remove();
            show_toastr('Great!', '{{ __('Copy Link Successfully.') }}', 'success',
                '{{ asset('assets/images/notification/ok-48.png') }}', 4000);
        }
    </script>

    <script>
        $(document).on('click', '#EventCalender', function() {
            var url = $(this).attr('data-url');
            $.ajax({
                type: 'GET',
                url: url,
                data: {},
                success: function(response) {
                    $("#common_modal .modal-title").html('{{ __('Create Event') }}');
                    $("#common_modal .body").html(response);
                    if ($('#user').length) {
                        var multipleCancelButton = new Choices(
                            '#user', {
                                removeItemButton: true,
                            });
                    }
                    const start_date = new Datepicker(document
                        .querySelector(
                            '#start_date'), {
                        buttonClass: 'btn',
                        format: 'dd/mm/yyyy'
                    });
                    const end_date = new Datepicker(document
                        .querySelector(
                            '#end_date'), {
                        buttonClass: 'btn',
                        format: 'dd/mm/yyyy'
                    });
                    $("#common_modal").modal('show');
                },
                error: function(response) {}
            });
        });
    </script>


@endpush

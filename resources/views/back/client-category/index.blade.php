@extends('layouts.back.main')
@section('title', __('Categories'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Categories') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Categories') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                {{-- @if (Auth::user()->can('create-testimonial')) --}}
                <div class="float-left">
                    <a href="{{ route('client-category.create') }}"
                        class="btn btn-light-primary">{{ __('Create Category') }}</a>
                </div>
                {{-- @endif --}}
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Created At') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <label class="form-switch">
                                <input class="form-check-input changeStatus" name="custom-switch-checkbox"
                                    {{ $category->status == 1 ? 'checked' : '' }}
                                    data-url="{{ route('client-category.status', $category->id) }}" type="checkbox">
                            </label>
                        </td>
                        <td>{{ \App\Facades\UtilityFacades::date_time_format($category->created_at) }}</td>
                        <td>

                            <a href="{{ route('client-category.edit', $category->id) }}"
                                class="btn btn-warning">{{ __('Edit') }}</a>
                            <form action="{{ route('client-category.destroy', $category->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('style')
    @include('layouts.includes.datatable-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
@push('script')
    @include('layouts.includes.datatable-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.changeStatus').change(function() {
                var url = $(this).data('url');
                var value = $(this).is(':checked');
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        _token: '{{ csrf_token() }}',
                        value: value
                    },
                    success: function(response) {
                        if (response.is_success) {
                            toastr.success(response.message);
                        } else {
                            toastr.error('Error updating status');
                        }
                    }
                });
            });
        });
    </script>
@endpush

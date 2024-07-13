@extends('layouts.back.main')
@section('title', __('Testimonials'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Testimonials') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'),__('Dashboard'),['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Testimonials') }}</li>
        </ul>
    </div>
@endsection


@section('content')
<div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                @if (Auth::user()->can('create-testimonial'))
                    <div class="float-left">
                        <a href="{{ route('testimonial.create') }}" class="btn btn-light-primary">{{ __('Create Testimonial') }}</a>
                    </div>
                @endif
            </div>
        </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Image') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Star Rating') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $index => $testimonial)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->title }}</td>
                    <td>
                        @if ($testimonial->image)
                            <img src="{{ Storage::url($testimonial->image) }}" style="width:60px;">
                        @else
                            <img src="{{ Storage::url('not-exists-data-images/350x250.png') }}" style="width:60px;">
                        @endif
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input chnageStatus" type="checkbox" role="switch" id="{{ $testimonial->id }}" data-url="{{ route('testimonial.status', $testimonial->id) }}" {{ $testimonial->status == 1 ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <div class="text-left">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($testimonial->rating < $i)
                                    @if (is_float($testimonial->rating) && (round($testimonial->rating) == $i))
                                        <i class="text-warning fas fa-star-half-alt"></i>
                                    @else
                                        <i class="fas fa-star"></i>
                                    @endif
                                @else
                                    <i class="text-warning fas fa-star"></i>
                                @endif
                            @endfor
                            <br><span class="theme-text-color">({{ number_format($testimonial->rating, 1) }})</span>
                        </div>
                    </td>
                    <td>{{ App\Facades\UtilityFacades::date_time_format($testimonial->created_at) }}</td>
                    <td>
                        @include('back.testimonials.action', ['row' => $testimonial])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('.chnageStatus').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            let url = this.dataset.url;
            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    status: this.checked ? 1 : 0,
                }),
            }).then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            }).then(data => {
                if (!data.success) {
                    this.checked = !this.checked;
                    alert('Failed to change status');
                }
            }).catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                this.checked = !this.checked;
                alert('Failed to change status');
            });
        });
    });
</script>
@endpush

{{-- @section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    {{ $dataTable->table(['width' => '100%']) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
    @include('layouts.includes.datatable-css')
@endpush
@push('script')
    @include('layouts.includes.datatable-js')
    {{ $dataTable->scripts() }}
@endpush --}}

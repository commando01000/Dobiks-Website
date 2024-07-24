@extends('layouts.back.main')
@section('title', __('Services'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Services') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Services') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                {{-- @if (Auth::user()->can('create-testimonial')) --}}
                <div class="float-left">
                    <a href="{{ route('services.create') }}" class="btn btn-light-primary">{{ __('Create Service') }}</a>
                </div>
                {{-- @endif --}}
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('Title') }}</th>

                    <th>{{ __('Created At') }}</th>
                    <th>{{ __('Cover') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->title }}</td>

                        <td>{{ \App\Facades\UtilityFacades::date_time_format($service->created_at) }}</td>
                        <td>
                            @if ($service->cover && Storage::exists($service->cover))
                                <img src="{{ Storage::url($service->cover) }}" width="50" />
                            @else
                                <img src="{{ Storage::url('not-exists-data-images/350x250.png') }}" width="50" />
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('services.show', $service->id) }}"
                                class="btn btn-success">{{ __('View') }}</a>
                            <a href="{{ route('services.edit', $service->id) }}"
                                class="btn btn-warning">{{ __('Edit') }}</a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST"
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
        {{ $services->links() }}
    </div>
@endsection

@push('style')
    @include('layouts.includes.datatable-css')
@endpush
@push('script')
    @include('layouts.includes.datatable-js')
@endpush

@extends('layouts.back.main')
@section('title', __('Clients'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Clients') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Clients') }}</li>
        </ul>

    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                {{-- @if (Auth::user()->can('create-testimonial')) --}}
                <div class="float-left">
                    <a href="{{ route('customer.create') }}" class="btn btn-light-primary">{{ __('Create client') }}</a>
                </div>
                {{-- @endif --}}
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th title="Name">{{ __('name') }}</th>
                    <th title="Role">{{ __('cover') }}</th>
                    {{-- <th title="Email">{{ __('Description') }}</th> --}}
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{ $client->name }}</td>

                        <td>
                            @if ($client->cover)
                                <img src="{{ Storage::url($client->cover) }}" style="width:60px;">
                            @else
                                <img src="{{ Storage::url('not-exists-data-images/350x250.png') }}" style="width:60px;">
                            @endif
                        </td>
                        <td>{{ $client->category->name }}</td>

                        <td>
                            <div class="text-left">
                                <a href="{{ route('customer.show', $client->id) }}"
                                    class="btn btn-light-success btn-sm">{{ __('View') }}</a>
                                <a href="{{ route('customer.edit', $client->id) }}"
                                    class="btn btn-light-primary btn-sm">{{ __('Edit') }}</a>
                                <a href="{{ route('customer.destroy', $client->id) }}"
                                    class="btn btn-light-danger btn-sm">{{ __('Delete') }}</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $clients->links() }}
    </div>
@endsection

@push('style')
    @include('layouts.includes.datatable-css')
@endpush

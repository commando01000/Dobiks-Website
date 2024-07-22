@extends('layouts.back.main')
@section('title', __('Our Team'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Our Team') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Our Team') }}</li>
        </ul>

    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                {{-- @if (Auth::user()->can('create-testimonial')) --}}
                <div class="float-left">
                    <a href="{{ route('leadership.create') }}"
                        class="btn btn-light-primary">{{ __('Create Member') }}</a>
                </div>
                {{-- @endif --}}
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th title="Name">{{ __('name') }}</th>
                    <th title="Email">{{ __('position') }}</th>
                    <th title="Role">{{ __('photo') }}</th>
                    <th title="Role">{{ __('statistics categories') }}</th>
                    <th title="Role">{{ __('statistics numbers') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leaderships as $leadership)
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{ $leadership->name }}</td>
                        <td>{{ $leadership->position }}</td>
                        <td>
                            @if ($leadership->photo)
                                <img src="{{ Storage::url($leadership->photo) }}" style="width:60px;">
                            @else
                                <img src="{{ Storage::url('not-exists-data-images/350x250.png') }}" style="width:60px;">
                            @endif
                        </td>
                        <td>
                            <ul>
                                @foreach ($leadership->details as $detail)
                                    <li>{{ $detail->category }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <ul>
                                @foreach ($leadership->details as $detail)
                                    <li>{{ $detail->number }}</li>
                                @endforeach
                            </ul>
                        </td>

                        <td>
                            <div class="text-left">
                                <a href="{{ route('leadership.view', $leadership->id) }}"
                                    class="btn btn-light-success btn-sm">{{ __('View') }}</a>
                                <a href="{{ route('leadership.edit', $leadership->id) }}"
                                    class="btn btn-light-primary btn-sm">{{ __('Edit') }}</a>
                                <a href="{{ route('leadership.destroy', $leadership->id) }}"
                                    class="btn btn-light-danger btn-sm">{{ __('Delete') }}</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $leaderships->links() }}
    </div>
@endsection

@push('style')
    @include('layouts.includes.datatable-css')
@endpush

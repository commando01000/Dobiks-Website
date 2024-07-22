@extends('layouts.back.main')
@section('title', __('Join Us'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Join Us') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Join Us') }}</li>
        </ul>

    </div>
@endsection
@section('content')
    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th title="#">{{ __('DT_RowIndex') }}</th>
                    <th title="Name">{{ __('Name') }}</th>
                    <th title="Email">{{ __('Email') }}</th>
                    {{-- <th title="Address">{{ __('Address') }}</th> --}}
                    <th title="Phone">{{ __('Phone') }}</th>
                    <th title="Job Title">{{ __('Job Title') }}</th>
                    <th title="Created At">{{ __('Created At') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joins as $join)
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{ $join->id }}</td>

                        <td>{{ $join->name }}</td>
                        <td>{{ $join->email }}</td>
                        {{-- <td>
                            <textarea name="">{{ $join->address }}</textarea>
                        </td> --}}
                        <td>{{ $join->phone }}</td>
                        <td>{{ $join->job_title }}</td>
                        <td>{{ $join->created_at }}</td>

                        <td>
                            <div class="text-left">
                                <a href="{{ route('join.edit', $join->id) }}"
                                    class="btn btn-light-primary btn-sm">{{ __('Edit') }}</a>

                                <form action="{{ route('join.destroy', $join->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $joins->links() }}
    </div>
@endsection

@push('style')
    @include('layouts.includes.datatable-css')
@endpush

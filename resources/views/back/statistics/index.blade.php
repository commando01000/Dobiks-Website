@extends('layouts.back.main')
@section('title', __('Statistics'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Statistics') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Statistics') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-header">
                    <h5>{{ __('Statistics') }}</h5>
                    <a href="{{ route('statistics.create') }}"
                        class="btn btn-primary float-right">{{ __('Create Statistics') }}</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Categories') }}</th>
                                <th>{{ __('Numbers') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statistics as $statistic)
                                <tr>
                                    <td>{{ $statistic->id }}</td>
                                    <td>{{ $statistic->title }}</td>
                                    <td>{{ $statistic->short_description }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($statistic->details as $detail)
                                                <li>{{ $detail->category }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach ($statistic->details as $detail)
                                                <li>{{ $detail->number }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{ route('statistics.edit', $statistic->id) }}"
                                            class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                                        {{-- {!! Form::open([
                                            'route' => ['statistics.destroy', $statistic->id],
                                            'method' => 'DELETE',
                                            'style' => 'display:inline-block;',
                                        ]) !!}
                                        {{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("Are you sure?")']) }}
                                        {!! Form::close() !!} --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
@endpush

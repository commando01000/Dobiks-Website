@extends('layouts.back.main')
@section('title', __('Projects'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Projects') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Projects') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                {{-- @if (Auth::user()->can('create-testimonial')) --}}
                <div class="float-left">
                    <a href="{{ route('projects.create') }}" class="btn btn-light-primary">{{ __('Create Project') }}</a>
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
                    <th>{{ __('cover') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $project->title }}</td>

                        <td>{{ \App\Facades\UtilityFacades::date_time_format($project->created_at) }}</td>
                        <td>
                            @if ($project->cover && Storage::exists($project->cover))
                                <img src="{{ Storage::url($project->cover) }}" width="50" />
                            @else
                                <img src="{{ Storage::url('not-exists-data-images/350x250.png') }}" width="50" />
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('projects.show', $project->id) }}"
                                class="btn btn-success">{{ __('View') }}</a>
                            <a href="{{ route('projects.edit', $project->id) }}"
                                class="btn btn-warning">{{ __('Edit') }}</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
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
        {{ $projects->links() }}
    </div>
@endsection

@push('style')
    @include('layouts.includes.datatable-css')
@endpush
@push('script')
    @include('layouts.includes.datatable-js')
@endpush

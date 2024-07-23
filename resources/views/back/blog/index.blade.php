@extends('layouts.back.main')

@section('title', __('Blogs'))

@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Blogs') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Blogs') }}</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="float-left">
                    <a href="{{ route('blog.create') }}" class="btn btn-light-primary">{{ __('Create Blog') }}</a>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('Category') }}</th>
                    <th>{{ __('Created At') }}</th>

                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->getTranslation('title', app()->getLocale()) }}</td>
                        <td>{{ $blog->category->getTranslation('name', app()->getLocale()) }}</td>
                        <td>{{ \App\Facades\UtilityFacades::date_time_format($blog->created_at) }}</td>

                        <td>
                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-success">{{ __('View') }}</a>
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs->links() }}
    </div>
@endsection

@push('style')
    <!-- Add your custom styles here -->
@endpush

@push('script')
    <!-- Add your custom scripts here -->
@endpush

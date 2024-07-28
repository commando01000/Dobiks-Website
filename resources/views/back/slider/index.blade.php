@extends('layouts.back.main')
@section('title', __('Slider'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Slider') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Slider') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-header">
                    <h5>{{ __('Slider') }}</h5>
                    <a href="{{ route('sliders.create') }}" class="btn btn-primary float-right">{{ __('Create Image') }}</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Image') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td> <img src="{{ Storage::url($slider->image) }}" width="100px" height="100px" alt="{{ $slider->title }}"></td>
                                    <td>
                                        <a href="{{ route('sliders.edit', $slider->id) }}"
                                            class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                                        </form>
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

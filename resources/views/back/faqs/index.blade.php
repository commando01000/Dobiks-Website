@extends('layouts.back.main')
@section('title', __('Faqs'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Faqs') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Faqs') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                {{-- @if (Auth::user()->can('create-testimonial')) --}}
                <div class="float-left">
                    <a href="{{ route('faqs.create') }}" class="btn btn-light-primary">{{ __('Create FAQ') }}</a>
                </div>
                {{-- @endif --}}
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('Questions') }}</th>
                    <th>{{ __('Order') }}</th>
                    <th>{{ __('Created At') }}</th>

                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $faq)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $faq->questions }}</td>
                        <td>{{ $faq->order }}</td>
                        <td>{{ \App\Facades\UtilityFacades::date_time_format($faq->created_at) }}</td>
                        <td>
                            <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $faqs->links() }}
    </div>
@endsection

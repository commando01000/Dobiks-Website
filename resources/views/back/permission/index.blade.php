@extends('layouts.back.main')
@section('title', __('Permission'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Permissions') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"> {{ __('Permissions') }} </li>
        </ul>
    </div>
    <!-- resources/views/permissions/index.blade.php -->
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
              
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $index => $permission)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <!-- Example actions, update according to your needs -->
                                    <a href="{{ route('permission.edit', $permission) }}"
                                        class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                    <form action="{{ route('permission.destroy', $permission) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $permissions->links() }}
        </div>
    </div>
@endsection

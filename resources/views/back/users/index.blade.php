@extends('layouts.back.main')
@section('title', __('Users'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Users') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Users') }}</li>
        </ul>
        <div class="float-end">
            <div class="d-flex align-items-center">

                <a class="btn btn-default buttons-create btn-light-primary no-corner me-1 add-user" tabindex="0" aria-controls="users-table" href="#"><span><i class="ti ti-plus"></i>{{__('Create')}}</span></a>
                <a class="btn btn-default btn-light-primary no-corner me-1" href="{{ route('grid.view','view') }}" data-bs-toggle="tooltip" title="{{ __('Grid View') }}"
                   class="btn btn-sm btn-primary" data-bs-placement="bottom">
                    <i class="ti ti-layout-grid"></i>
                </a>

            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <div id="users-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="dataTable-container">
                            <div class="col-sm-12">
                                <table class="table dataTable no-footer" id="users-table" width="100%" role="grid" aria-describedby="users-table_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th title="Name" >{{__('Name')}}</th>
                                            <th title="Email">{{__('Email')}}</th>
                                            <th title="Role">{{__('Role')}}</th>
                                            <th title="Action" width="120" class="text-end sorting_disabled">{{__('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><span class="p-2 px-3 badge rounded-pill bg-primary">{{ $user->type }}</span></td>
                                            <td class="text-end">
                                                <span>
                                                    <a class="btn btn-secondary btn-sm" href="/users/{{ $user->id }}/impersonate" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="{{__('Impersonate')}}" aria-label="{{__('Impersonate')}}">
                                                        <i class="ti ti-new-section"></i>
                                                    </a>
                                                    <a class="btn btn-primary btn-sm" href="javascript:void(0);" id="edit-user" data-url="/users/{{ $user->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="{{__('Edit')}}">
                                                        <i class="ti ti-edit"></i>
                                                    </a>
                                                    <form method="POST" action="/users/{{ $user->id }}" accept-charset="UTF-8" id="delete-form-7" class="d-inline">
                                                        <input name="_method" type="hidden" value="DELETE" />
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <a href="#" class="btn btn-danger btn-sm show_confirm" id="delete-form-7" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="{{__('Delete')}}"><i class="ti ti-trash"></i></a>
                                                    </form>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>
                </div>
                {{ $users->links() }}

            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
    @include('layouts.includes.datatable-css')
@endpush
@push('script')

    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script>
        $(function() {
            $('body').on('click', '.add-user', function() {
                var modal = $('#common_modal');
                $.ajax({
                    type: "GET",
                    url: '{{ route('users.create') }}',
                    data: {},
                    success: function(response) {
                        modal.find('.modal-title').html('{{ __('Create User') }}');
                        modal.find('.body').html(response.html);
                        var multipleCancelButton = new Choices('#roles', {
                            removeItemButton: true,
                        });
                        var multipleCancelButton = new Choices('#country_code', {
                            removeItemButton: true,
                        });
                        modal.modal('show');
                    },
                    error: function(error) {}
                });
            });
            $('body').on('click', '#edit-user', function() {
                var action = $(this).attr('data-url');
                var modal = $('#common_modal');
                $.get(action, function(response) {

                    modal.find('.modal-title').html('{{ __('Edit User') }}');
                    modal.find('.body').html(response.html);
                    var multipleCancelButton = new Choices('#roles', {
                        removeItemButton: true,
                    });
                    var multipleCancelButton = new Choices('#country_code', {
                        removeItemButton: true,
                    });
                    modal.modal('show');
                })
            });
        });
    </script>
@endpush

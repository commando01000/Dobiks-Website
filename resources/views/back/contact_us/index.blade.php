@extends('layouts.back.main')
@section('title', __('Contact_us'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Contact_us') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Contact_us') }}</li>
        </ul>

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
                                            <th title="Name" >{{__('full_name')}}</th>
                                            <th title="Email">{{__('company_name')}}</th>
                                            <th title="Role">{{__('Phone')}}</th>
                                            <th title="Role">{{__('service')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($contact_us as $contact)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $contact->full_name }}</td>
                                                <td>{{ $contact->company_name }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->service }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                    </div>
                    {{ $contact_us->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    @include('layouts.includes.datatable-css')

@endpush


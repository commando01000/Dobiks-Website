@extends('layouts.back.main')
@section('title', __('Landing Page'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Menu Settings') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Menu Settings') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5>{{ __('Link') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'menu.store',
                        'method' => 'Post',
                        'class' => 'form-horizontal',
                        'data-validate',
                        'no-validate',
                    ]) !!}
                    <input type="hidden" value="link" name="type">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('slug', __('Full url'), ['class' => 'form-label']) }}
                                {!! Form::text('slug', null, [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter url'),
                                ]) !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('title', __('Link Title'), ['class' => 'form-label']) }}
                                {!! Form::text('title', null, [
                                    'class' => 'form-control',
                                    'placeholder' => __('Enter Link Title'),
                                ]) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('page_id', __('Select Page'), ['class' => 'form-label']) }}
                                <select name="parent_id" class="form-control">
                                    <option value="0">{{__('Main link')}}</option>
                                    @foreach($MainMenus as $k=>$record)
                                    <option value="{{$record['id']}}">{{__('Sub-link below')}} ({{$record['title']}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5>{{ __('Pages') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
            {!! Form::open([
                'route' => 'menu.store',
                'method' => 'Post',
                'class' => 'form-horizontal',
                'data-validate',
                'no-validate',
            ]) !!}
                    <input type="hidden" value="page" name="type">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('page_id', __('Select Page'), ['class' => 'form-label']) }}
                                {!! Form::select('page_id', $pages, null, ['class' => 'form-control', 'required', 'data-trigger']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('page_id', __('Select Page'), ['class' => 'form-label']) }}
                                <select name="parent_id" class="form-control">
                                    <option value="0">{{__('Main link')}}</option>
                                    @foreach($MainMenus as $k=>$record)
                                        <option value="{{$record['id']}}">{{__('Sub-link below')}} ({{$record['title']}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    </div>
            {{ Form::close() }}
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <h5>{{ __('Pages') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open([
                        'route' => 'menu.store',
                        'method' => 'Post',
                        'class' => 'form-horizontal',
                        'data-validate',
                        'no-validate',
                    ]) !!}
                    <input type="hidden" value="system" name="type">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('system_id', __('Select Serves'), ['class' => 'form-label']) }}
                                <select name="slug" class="form-control">
                                    @foreach($system as $k=>$record)
                                        <option value="{{$k}}">{{$record}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('parent_id', __('Select Page'), ['class' => 'form-label']) }}
                                <select name="parent_id" class="form-control">
                                    <option value="0">{{__('Main link')}}</option>
                                    @foreach($MainMenus as $k=>$record)
                                        <option value="{{$record['id']}}">{{__('Sub-link below')}} ({{$record['title']}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h5>{{ __('Main Menu') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table"  id="sortable-table">
                                    <thead>
                                        <tr>
                                            <th width="50px">#</th>
                                            <th width="50px"></th>
                                            <th>{{ __('Menu Name') }}</th>
                                            <th width="150px">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (is_array($MainMenus) || is_object($MainMenus))
                                            @php $ff_no = 1; @endphp
                                            @foreach ($MainMenus as $key => $MainMenu)
                                                <tr data-id="{{ $MainMenu['id'] }}">
                                                    <td>
                                                        @if($key !=0)
                                                        <div>
                                                           <a href="/cp/menu/sort/{{$MainMenu['id']}}/{{$MainMenus[$key-1]['id']}}"><i class=" ti ti-arrow-up"></i></a>
                                                        </div>
                                                        @endif
                                                        @if(isset($MainMenus[$key+1]))
                                                        <div>
                                                            <a href="/cp/menu/sort/{{$MainMenu['id']}}/{{$MainMenus[$key+1]['id']}}"><i class=" ti ti-arrow-down"></i></a>
                                                        </div>
                                                        @endif
                                                    </td>
                                                    <td></td>
                                                    <td>{{ $MainMenu['title'] }}</td>
                                                    <td>
                                                        <span class="d-flex">
                                                            <div>
                                                                <a href="{{ route('menu.edit', $MainMenu->id) }}"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom"
                                                                    class="btn btn-sm btn-primary mx-1 main_menu_edit"
                                                                    data-bs-original-title="{{ __('Edit') }}">
                                                                    <i class="ti ti-pencil text-light"></i>
                                                                </a>
                                                            </div>

                                                            {!! Form::open([
                                                                'method' => 'DELETE',
                                                                'class' => 'd-inline',
                                                                'route' => ['menu.delete', $MainMenu->id],
                                                                'id' => 'delete-form-' . $MainMenu->id,
                                                            ]) !!}
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-sm small btn btn-danger show_confirm"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                id="delete-form-1"
                                                                data-bs-original-title="{{ __('Delete') }}">
                                                                <i class="ti ti-trash text-white"></i>
                                                            </a>
                                                            {!! Form::close() !!}
                                                        </span>
                                                    </td>
                                                </tr>
                                                @php $subff_no = 1;
                                                @endphp
                                                @foreach ($MainMenu['SubMenus'] as $key => $SubMenu)
                                                    <tr data-id="{{ $SubMenu['id'] }}">
                                                        <td></td>
                                                        <td> @if($key !=0)
                                                                <div>
                                                                    <a href="/cp/menu/sort/{{$SubMenu['id']}}/{{$MainMenu['SubMenus'][$key-1]['id']}}"><i class=" ti ti-arrow-up"></i></a>
                                                                </div>
                                                            @endif
                                                            @if(isset($MainMenu['SubMenus'][$key+1]))
                                                                <div>
                                                                    <a href="/cp/menu/sort/{{$SubMenu['id']}}/{{$MainMenu['SubMenus'][$key+1]['id']}}"><i class=" ti ti-arrow-down"></i></a>
                                                                </div>
                                                            @endif</td>
                                                        <td>{{ $SubMenu['title'] }}</td>
                                                        <td>
                                                        <span class="d-flex">
                                                            <div>
                                                                <a href="{{ route('menu.edit', $SubMenu->id) }}"
                                                                   data-bs-toggle="tooltip"
                                                                   data-bs-placement="bottom"
                                                                   class="btn btn-sm btn-primary mx-1 main_menu_edit"
                                                                   data-bs-original-title="{{ __('Edit') }}">
                                                                    <i class="ti ti-pencil text-light"></i>
                                                                </a>
                                                            </div>

                                                            {!! Form::open([
                                                                'method' => 'DELETE',
                                                                'class' => 'd-inline',
                                                                'route' => ['menu.delete', $SubMenu->id],
                                                                'id' => 'delete-form-' . $SubMenu->id,
                                                            ]) !!}
                                                            <a href="javascript:void(0);"
                                                               class="btn btn-sm small btn btn-danger show_confirm"
                                                               data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                               id="delete-form-1"
                                                               data-bs-original-title="{{ __('Delete') }}">
                                                                <i class="ti ti-trash text-white"></i>
                                                            </a>
                                                            {!! Form::close() !!}

                                                        </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
@endpush
@push('script')

@endpush

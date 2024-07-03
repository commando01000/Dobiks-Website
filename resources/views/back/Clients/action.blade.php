{{-- @can('edit-advertisement') --}}
    @if($client->builder == 'on')
    <a class="btn btn-sm small btn btn-primary" target="_blank" href="{{ route('builder.index', ['id' => $client->id, 'db' => 'client']) }}" data-bs-toggle="tooltip"
       data-bs-placement="bottom" data-bs-original-title="{{ __('Builder') }}">
        <i class="ti ti-palette text-white"></i>
    </a>
    @endif
    <a class="btn btn-sm small btn btn-primary" href="client/{{ $client->id }}/edit" data-bs-toggle="tooltip"
        data-bs-placement="bottom" data-bs-original-title="{{ __('Edit') }}"><i class="ti ti-edit text-white"></i>
    </a>
{{-- @endcan --}}
{{-- @can('delete-client') --}}
    {!! Form::open([
        'method' => 'DELETE',
        'class' => 'd-inline',
        'route' => ['client.destroy', $client->id],
        'id' => 'delete-form-' . $client->id,
    ]) !!}
    <a href="#" class="btn btn-sm small btn btn-danger show_confirm" data-bs-toggle="tooltip" data-bs-placement="bottom"
        id="delete-form-1" data-bs-original-title="{{ __('Delete') }}"><i class="ti ti-trash text-white"></i>
    </a>
    {!! Form::close() !!}
{{-- @endcan --}}

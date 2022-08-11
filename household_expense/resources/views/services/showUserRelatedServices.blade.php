@extends('layouts.authenticated')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="offset-md-2 col-md-10">
            <div class="card">
                <div class="card-header">{{ __('services.exsisiting') }} {{  __('menu.services')  }}</div>

                <div class="card-body">
                    <div class="col-12 mt-4">
                        <a class="btn btn-success w-100" href="{{ url('/') }}/services/add">
                            {{ __('menu.add') }} {{ __('menu.services') }}
                        </a>
                    </div>
                    <div class="col-12 mt-4">
                        <table class="table table-striped  table-hover ">
                            <tr>
                                <th colspan="6" class="text-center">
                                    {{ __('services.exsisiting') }} {{  __('menu.services')  }}
                                </th>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>{{ __('services.name_of_service') }}</th>
                                <th>{{ __('services.price') }}</th>
                                <th>{{ __('services.price_per_unit_type') }}</th>
                                <th>{{ __('services.have_to_mulitplied_with_measured_unit') }}</th>
                                <th>{{ __('services.created_at') }}</th>
                            </tr>
                            @foreach($services as $service)
                                <tr>
                                    <td>  {{ $service->id }} </td>
                                    <td>  {{ $service->name_of_service }} </td>
                                    <td>  {{ $service->price_per_unit }} </td>
                                    <td>  {{ $service->price_per_unit_type }} </td>
                                    <td>  {{ $service->multiplication_required }} </td>
                                    <td>  {{ $service->created_at }} </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.authenticated')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="offset-md-2 col-md-10">
            <div class="card">
                <div class="card-header">{{ __('services.exsisiting') }} {{  __('menu.measurers')  }}</div>

                <div class="card-body">
                    <div class="col-12 mt-4">
                        <a class="btn btn-success w-100" href="{{ url('/') }}/measurers/add">
                            {{ __('menu.add') }} {{ __('menu.measurers') }}
                        </a>
                    </div>
                    <div class="col-12 mt-4">
                        <table class="table table-striped  table-hover ">
                            <tr>
                                <th colspan="6" class="text-center">
                                    {{ __('services.exsisiting') }} {{  __('menu.measurers')  }}
                                </th>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>{{ __('measurers.name_of_measurer') }}</th>
                                <th>{{ __('measurers.unit_of_measure') }}</th>
                                <th>{{ __('services.created_at') }}</th>
                            </tr>
                            @foreach($measurers as $measurer)
                                <tr>
                                    <td>  {{ $measurer->id }} </td>
                                    <td>  {{ $measurer->name_of_measurer }} </td>
                                    <td>  {{ $measurer->unit_of_measure }} </td>
                                    <td>  {{ $measurer->created_at }} </td>
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

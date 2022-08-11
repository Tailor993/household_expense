@extends('layouts.authenticated')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{  __('menu.add')  }} {{  __('menu.measurers')  }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/') }}/measurers">
                       @csrf
                        <div class="form-group ">
                            <label for="name_of_measurer">{{ __('measurers.name_of_measurer') }}</label>
                            <input type="text" class="form-control" id="name_of_measurer"  name="name_of_measurer" aria-describedby="name_of_measurer_HELP" placeholder="{{__('services.example')}} {{__('measurers.hot_water_measurer')}}">
                            <small id="name_of_measurer_HELP" class="form-text text-muted">{{__('measurers.this_helps_you_to_identify_the_measurer')}}</small>
                        </div>
                        <div class="form-group mt-4">
                            <label for="unit_of_measure">{{__('measurers.unit_of_measure')}}</label>
                            <input type="text" class="form-control" id="unit_of_measure" name="unit_of_measure" aria-describedby="unit_of_measure_HELP" placeholder="{{__('services.example')}} {{__('measurers.M3')}}">
                            <small id="unit_of_measure_HELP" class="form-text text-muted"></small>
                        </div>
                        <button type="submit" class="btn btn-primary  mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

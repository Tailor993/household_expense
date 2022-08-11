@extends('layouts.authenticated')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{  __('menu.add')  }} {{  __('menu.services')  }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/') }}/services">
                        @csrf
                        <div class="form-group ">
                            <label for="name_of_service">{{__('services.name_of_service')}}</label>
                            <input type="text" class="form-control" id="name_of_service"  name="name_of_service" aria-describedby="name_of_service_HELP" placeholder="{{__('services.example')}} {{__('services.water_heating')}}">
                            <small id="name_of_service_HELP" class="form-text text-muted">{{__('services.this_helps_you_to_identify_the_service')}}</small>
                        </div>
                        <div class="form-group mt-4">
                            <label for="price">{{__('services.price')}}</label>
                            <input type="number" min="0.01" max="1000000" step="0.01" class="form-control" id="price" name="price" aria-describedby="price_HELP" placeholder="{{__('services.example')}} 50">
                            <small id="price_HELP" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group mt-4">
                            <label for="price_per_unit_type">{{__('services.price_per_unit_type')}}</label>
                            <input type="text" class="form-control" id="price_per_unit_type" name="price_per_unit_type" aria-describedby="price_per_unit_type_HELP" placeholder="{{__('services.example')}} {{__('services.USD_M3')}}">
                            <small id="price_per_unit_type_HELP" class="form-text text-muted"></small>
                        </div>
                        <div class="form-check mt-4">
                            <input type="checkbox" class="form-check-input" id="multiplication_required" name="multiplication_required">
                            <label class="form-check-label" for="multiplication_required">{{__('services.have_to_mulitplied_with_measured_unit')}}</label>
                        </div>
                        <button type="submit" class="btn btn-primary  mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.authenticated')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{  __('menu.add')  }} {{  __('menu.measurers')  }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/') }}/measurments">
                       @csrf
                        <div class="form-group ">
                            <label for="select_measurer">{{ __('measurments.select_measurer') }}</label>
                            <select class="form-select" id="select_measurer" name="select_measurer" aria-label="Default select example">
                                <option selected value="-1">Open this select menu</option>
                                @foreach($measurers as $measurer)
                                    <option value="{{ $measurer->id }}">{{ $measurer->name_of_measurer }} ( {{ $measurer->unit_of_measure }} )</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="consumed">{{__('measurments.consumed')}}</label>
                            <input type="number" min=0 step=1 class="form-control" id="consumed" name="consumed" aria-describedby="consumed_HELP" placeholder="{{__('services.example')}} 3">
                            <small id="consumed_HELP" class="form-text text-muted"></small>
                        </div>
                        <button type="submit" class="btn btn-primary  mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

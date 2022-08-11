<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showUserRelatedServices()
    {
        $services = Service::all();
        return view('services.showUserRelatedServices', ['services' => $services]);
    }

    public function showServiceAdditionFrom(){
        return view('services.showServiceAdditionFrom');
    }

    public function checkAndSaveNewUserRelatedServices(Request $request){
        //dd( $request );
        if( 
            ServicesController::ParameterExsistAndLengthValid( $request->post('name_of_service') )
            && ServicesController::ParameterExsistAndLengthValid( $request->post('price_per_unit_type') )
            && ServicesController::ParameterExsistAndGreaterNumberThen0( $request->post('price') ) 
        ){
            $service = new Service;

            $service->name_of_service = $request->post('name_of_service');
            $service->price_per_unit_type = $request->post('price_per_unit_type');
            $service->price_per_unit = $request->post('price');

            $service->multiplication_required = false;

            if( isset ( $request->multiplication_required ) ){
                $service->multiplication_required = true;
            }
        
            $service->save();

            return view('services.showUserRelatedServices');

        }else{
            return view('services.showServiceAdditionFrom');
        }
    }

    static private function ParameterExsistAndGreaterNumberThen0( $parameterWichShouldBeChecked ){
        if(  isset( $parameterWichShouldBeChecked ) && is_numeric( $parameterWichShouldBeChecked )   ){
            return true;
        }else{
            return false;
        }
    }

    static private function ParameterExsistAndLengthValid( $parameterWichShouldBeChecked ){
        if(  isset( $parameterWichShouldBeChecked ) && strlen( $parameterWichShouldBeChecked ) > 0  ){
            return true;
        }else{
            return false;
        }
    }
}

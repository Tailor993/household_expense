<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Auth;

class ServicesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showUserRelatedServices()
    {

        $services = [];
        $services = Service::where('user_id', Auth::id())->get();
        
        return view('services.showUserRelatedServices', ['services' => $services]);
    }

    public function showServiceAdditionFrom(){
        return view('services.showServiceAdditionFrom');
    }

    public function checkAndSaveNewUserRelatedServices(Request $request){
        
        if( 
            Controller::ParameterExsistAndLengthValid( $request->post('name_of_service') )
            && Controller::ParameterExsistAndLengthValid( $request->post('price_per_unit_type') )
            && Controller::ParameterExsistAndGreaterNumberThen0( $request->post('price') ) 
        ){
            $service = new Service;

            $service->name_of_service = $request->post('name_of_service');
            $service->price_per_unit_type = $request->post('price_per_unit_type');
            $service->price_per_unit = $request->post('price');
            $service->user_id = Auth::id();

            $service->multiplication_required = false;

            if( isset ( $request->multiplication_required ) ){
                $service->multiplication_required = true;
            }
        
            $service->save();
            return redirect(url('/').'/services');

        }else{
            return redirect(url('/').'/services/add');
        }
    }

}

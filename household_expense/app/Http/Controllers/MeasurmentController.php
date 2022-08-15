<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurment;
use App\Models\Measurer;
use Auth;

class MeasurmentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showUserRelatedMeasurements(){
        
        $measurers = [];

        $measurers = Measurer::where('user_id', Auth::id())->get();
     
        return view('measurements.showUserRelatedMeasurments', [ 'measurers' => $measurers]);
    }

    public function showMeasurmentsAdditionFrom(){
        
        $measurers = [];
        $measurers = Measurer::where('user_id', Auth::id())->get();

        return view('measurements.showMeasurmentsAdditionFrom', ['measurers' => $measurers]);
    }

    public function checkAndSaveNewUserRelatedMeasurments(Request $request){
        if( 
            Controller::ParameterExsistAndGreaterNumberThen0( $request->post('consumed') )
            && Controller::ParameterExsistAndGreaterNumberThen0( $request->post('select_measurer') )
        ){
            $measurment = new Measurment;

            $measurment->consumed = $request->post('consumed');
            $measurment->measurer_id = $request->post('select_measurer');
        
            $measurment->save();
            return redirect(url('/').'/measurments');

        }else{
            return redirect(url('/').'/measurments/add');
        }
    }

}

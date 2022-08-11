<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurer;
use Auth;

class MeasurerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showUserRelatedMeasurers(){
        
        $measurers = [];
        $measurers = Measurer::where('user_id', Auth::id())->get();
        
        return view('mesaurer.showUserRelatedMeasurers', ['measurers' => $measurers]);
    }

    public function showMeasurerAdditionFrom(){
        return view('mesaurer.showMeasurersAdditionFrom');
    }

    public function checkAndSaveNewUserRelatedMesaurers(Request $request){
         
        if( 
            Controller::ParameterExsistAndLengthValid( $request->post('name_of_measurer') )
            && Controller::ParameterExsistAndLengthValid( $request->post('unit_of_measure') )
        ){
            $measurer = new Measurer;

            $measurer->name_of_measurer = $request->post('name_of_measurer');
            $measurer->unit_of_measure = $request->post('unit_of_measure');
            $measurer->user_id = Auth::id();
        
            $measurer->save();
            return redirect(url('/').'/measurers');

        }else{
            return redirect(url('/').'/measurers/add');
        }
    }

}

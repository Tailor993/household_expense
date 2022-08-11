<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    static protected function ParameterExsistAndGreaterNumberThen0( $parameterWichShouldBeChecked ){
        if(  isset( $parameterWichShouldBeChecked ) && is_numeric( $parameterWichShouldBeChecked ) && $parameterWichShouldBeChecked > 0  ){
            return true;
        }else{
            return false;
        }
    }

    static protected function ParameterExsistAndLengthValid( $parameterWichShouldBeChecked ){
        if(  isset( $parameterWichShouldBeChecked ) && mb_strlen( $parameterWichShouldBeChecked ) > 0  ){
            return true;
        }else{
            return false;
        }
    }
}

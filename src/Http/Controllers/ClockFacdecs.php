<?php
//namespace Cre\Clock\ClockProv;
namespace Cre\Clock\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClockFacdecs extends Controller
{
    //
    public static function clock(){
        return date("d/M/Y");
    }

    public  function map(){
        return view("clock::map");
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function diagramm()
    {


        if(isset($_GET['sick']))
        {
            $s = $_GET['sick'];
            $minus = Member::where('type_sickness', $s)->where('psr', '-')->count();
            $plus = Member::where('type_sickness',  $s)->where('psr', '+')->count();
        }

        else
        {
            $minus = Member::where('psr', '-')->count();
            $plus = Member::where('psr', '+')->count();
            $s = "Barcha";
        }


        $minus1 = ($minus/($plus + $minus))*100;
        $plus1 = ($plus/($plus + $minus))*100;

        $all = Member::count();

        $torch = Member::where('type_sickness', 'TORCH')->count() ;
        $covid = Member::where('type_sickness', 'Covid-19')->count() ;
        $omikron = Member::where('type_sickness', 'Omikron')->count()  ;
        $grip = Member::where('type_sickness', 'Grip')->count() ;
        $ga = Member::where('type_sickness', 'Gepatit A')->count() ;
        $gb = Member::where('type_sickness', 'Gepatit B')->count() ;
        $gc = Member::where('type_sickness', 'Gepatit C')->count()  ;


// return $torch;
        // return $minus;
        return view('diagram', compact('minus1', 'plus1', 'torch', 'covid', 'omikron', 'grip', 'ga', 'gb', 'gc', 's'));
    }
}

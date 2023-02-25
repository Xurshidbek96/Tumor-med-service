<?php

namespace App\Repositories;
use App\Repositories\Interfaces\MemberRepositoryInterface;
use App\Models\Member;

class MemberRepository implements MemberRepositoryInterface
{
    public function diagramm(){

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

        $gc = Member::where('type_sickness', 'Gepatit C')->count()  ;
        $gb = Member::where('type_sickness', 'Gepatit B')->count() ;

        return [
            'minus' => $minus,
            'plus' => $plus,
            's' => $s,
            'minus1' => $minus1,
            'plus1' => $plus1,
            'all' => $all,
            'torch' => $torch,
            'covid' => $covid,
            'omikron' => $omikron,
            'grip' => $grip,
            'ga' => $ga,
            'gc' => $gc,
            'gb' => $gb,
        ];
    }
}

?>

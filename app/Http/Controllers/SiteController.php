<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Repositories\Interfaces\MemberRepositoryInterface;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public $memberRepositoryInterface;

    public function __construct (MemberRepositoryInterface $memberRepositoryInterface)
    {
        $this->memberRepositoryInterface = $memberRepositoryInterface;
    }
    
    public function diagramm()
    {
        $array = $this->memberRepositoryInterface->diagramm();
        return view('diagram', compact('array'));
    }
}

<?php
namespace App\Services;
use App\Models\Member;

class MemberService
{
    public function store($request)
    {
        $reqData = $request->all();

        $reqData['result'] = ($request->alt + $request->ast +  $request->billirubin +  $request->ishqor + $request->surma + $request->igg + $request->igm) / 7;

        return Member::create($reqData);

    }
}
?>

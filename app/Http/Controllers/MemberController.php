<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Member;

class MemberController extends Controller
{
    //

    public function index(Request $request)
    {
        $member = Member::all();
        return view('member.index', [
            'member' => $member,
        ]);
    }



    public function hensyu(Request $request)
    {

            $member = Member::where('id', $request["id"])
                ->first();


        
        return view('member.hensyu', [
            'member' => $member,
        ]);
    }

    public function ichi(Request $request)
    {


        $members = Member::all();

        return view('member.ichi', [
            'members' => $members,
        ]);


    }

    public function touroku(Request $request)
    {

        //ポストデータすべての取得
        $member = new Member;
        $member->name = $request['name'];
        $member->phone = $request['phone'];
        $member->email = $request['email'];
        $member->id = $request['id'];
        $member->save();
        $members = Member::all();

        return view('member.ichi', [
            'members' => $members,
        ]);


    }


    public function koushin(Request $request)
    {


        
        Log::debug('test debug');
        error_log('test1',0);
        $member = Member::find($request['id']);
        $member->name = $request['name'];
        $member->phone = $request['phone'];
        $member->email = $request['email'];
        $member->save();
        $members = Member::all();
            error_log($request['name'],0);
            error_log('test',0);
            Log::debug('test debug');

        return view('member.ichi', [
            'members' => $members,
        ]);


    }



    /**
     * タスク削除
     *
     * @param Request $request
     * @param Member $member
     * @return Response
     */
    public function delete(Request $request, Member $member)
    {
        $member = Member::find($request['id']);

        $member->delete();
        $members = Member::all();
        return view('member.ichi',[
            'members' => $members,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Validator;

class MemberController extends Controller
{
    public function index()
    {
        return Member::all();
    }

    public function show($id){
        $member = Member::findOrFail($id);
        return $member;
    }

    public function create(Request $request){
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        if($validated->fails()){
            dd("Invalid");
        }
        // $member = Member::create();
        // return $member;
    }
}

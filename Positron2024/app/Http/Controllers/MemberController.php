<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{
    public function group(Request $request)
    {
        $query = $request->input('search');

        $members = Member::when($query, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('nim', 'like', "%{$search}%")
                         ->orWhere('group_name', 'like', "%{$search}%")
                         ->orWhere('mentor_name', 'like', "%{$search}%");
        })->get();

        return view('members.group', compact('members', 'query'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function group(Request $request)
    {
        $query = $request->input('search');
        
        // Ambil semua data member jika tidak ada pencarian
        $members = Member::when($query, function ($queryBuilder, $search) {
            return $queryBuilder->where('name', 'like', "%{$search}%")
                               ->orWhere('nim', 'like', "%{$search}%")
                               ->orWhere('group_name', 'like', "%{$search}%")
                               ->orWhere('mentor_name', 'like', "%{$search}%");
        })->get();

        // Debug untuk memastikan data ada
        // dd($members); // Uncomment untuk debugging
        
        return view('members.group', compact('members', 'query'));
    }
}
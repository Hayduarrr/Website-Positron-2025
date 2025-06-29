<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $targetDate = Carbon::create(2025, 8, 15, 0, 0, 0); // Tanggal event POSITRON 2025
        
        // Data untuk job listings
        $jobs = [
            [
                'title' => 'Web Developer',
                'company' => 'PT. Tech Solution',
                'salary' => '8-12 jt',
                'icon' => 'fas fa-code'
            ],
            [
                'title' => 'Mobile Dev',
                'company' => 'Digital Agency',
                'salary' => '7-10 jt',
                'icon' => 'fas fa-mobile-alt'
            ],
            [
                'title' => 'Database Admin',
                'company' => 'Bank Mandiri',
                'salary' => '9-13 jt',
                'icon' => 'fas fa-database'
            ],
            [
                'title' => 'Cyber Security',
                'company' => 'Govt Agency',
                'salary' => '10-15 jt',
                'icon' => 'fas fa-shield-alt'
            ],
            [
                'title' => 'Data Analyst',
                'company' => 'Startup Tech',
                'salary' => '6-9 jt',
                'icon' => 'fas fa-chart-line'
            ],
            [
                'title' => 'UI/UX Designer',
                'company' => 'Creative Studio',
                'salary' => '5-8 jt',
                'icon' => 'fas fa-paint-brush'
            ]
        ];
        
        return view('home', compact('targetDate', 'jobs'));
    }
    
    public function getCountdown()
    {
        $targetDate = Carbon::create(2025, 8, 15, 0, 0, 0);
        $now = Carbon::now();
        
        if ($now->greaterThan($targetDate)) {
            return response()->json([
                'days' => 0,
                'hours' => 0,
                'minutes' => 0,
                'seconds' => 0,
                'expired' => true
            ]);
        }
        
        $diff = $now->diff($targetDate);
        
        return response()->json([
            'days' => $diff->days,
            'hours' => $diff->h,
            'minutes' => $diff->i,
            'seconds' => $diff->s,
            'expired' => false
        ]);
    }
    
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);
        
        // Logic untuk handle contact form
        // Bisa simpan ke database atau kirim email
        
        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dikirim!'
        ]);
    }
    
    public function applyJob(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'position' => 'required|string',
            'cv' => 'required|file|mimes:pdf|max:2048'
        ]);
        
        // Logic untuk handle job application
        // Simpan CV dan data pelamar
        
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Lamaran berhasil dikirim!'
        ]);
    }
}
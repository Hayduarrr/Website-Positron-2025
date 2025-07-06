<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    
    protected $fillable = [
        'nim',
        'name', 
        'group_name',
        'mentor_name'
    ];

    // Jika tidak menggunakan timestamps (created_at, updated_at)
    public $timestamps = false;
}
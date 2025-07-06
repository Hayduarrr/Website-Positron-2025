@extends('layouts.app')
@section('title', 'Group Page')

@section('content')
<style>
    #kelompok {
        background-color: #6679A1;
        min-height: 100vh;
        padding: 40px 0;
    }
    
    .notebook-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        background: #F5E6A3;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }
    
    .notebook-container::before {
        content: '';
        position: absolute;
        left: -10px;
        top: 10px;
        bottom: 10px;
        width: 20px;
        background: repeating-linear-gradient(
            to bottom,
            transparent 0px,
            transparent 15px,
            #333 15px,
            #333 20px
        );
        border-radius: 3px;
    }
    
    .spiral-binding {
        position: absolute;
        top: -15px;
        left: 50px;
        right: 50px;
        height: 30px;
        background: repeating-linear-gradient(
            to right,
            #333 0px,
            #333 10px,
            transparent 10px,
            transparent 25px
        );
    }
    
    .spiral-ring {
        position: absolute;
        top: -8px;
        width: 16px;
        height: 16px;
        background: #333;
        border-radius: 50%;
        border: 2px solid #555;
    }
    
    .notebook-paper {
        background: white;
        min-height: 500px;
        padding: 30px;
        border-radius: 8px;
        box-shadow: inset 0 0 10px rgba(0,0,0,0.1);
        position: relative;
        background-image: 
            linear-gradient(90deg, #ff6b6b 25px, transparent 25px),
            repeating-linear-gradient(transparent, transparent 24px, #e0e0e0 24px, #e0e0e0 26px);
        background-size: 100% 26px;
        margin-top: 20px;
    }
    
    .page-header {
        margin-left: 40px;
        padding-bottom: 20px;
        border-bottom: 2px solid #333;
        margin-bottom: 30px;
    }
    
    .page-title {
        font-family: 'Arial', sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .search-section {
        margin-left: 40px;
        margin-bottom: 20px;
    }
    
    .search-label {
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
        display: block;
    }
    
    .search-input {
        border: none;
        border-bottom: 2px solid #333;
        background: transparent;
        padding: 8px 0;
        font-size: 16px;
        width: 300px;
        outline: none;
        font-family: inherit;
    }
    
    .search-input:focus {
        border-bottom-color: #6679A1;
    }
    
    .btn-search {
        background-color: #6679A1;
        color: white;
        border: none;
        padding: 8px 20px;
        margin-left: 15px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s;
    }
    
    .btn-search:hover {
        background-color: #5568a0;
    }
    
    .data-table {
        margin-left: 40px;
        width: calc(100% - 80px);
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .data-table th {
        background-color: #6679A1;
        color: white;
        padding: 12px 15px;
        text-align: center;
        font-weight: bold;
        border: 2px solid #333;
    }
    
    .data-table td {
        padding: 10px 15px;
        border: 1px solid #333;
        text-align: center;
        background: white;
    }
    
    .data-table tr:nth-child(even) td {
        background: #f9f9f9;
    }
    
    .alert-message {
        margin-left: 40px;
        margin-right: 40px;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        font-weight: bold;
    }
    
    .alert-warning {
        background-color: #fff3cd;
        border: 2px solid #ffc107;
        color: #856404;
    }
    
    .alert-info {
        background-color: #d1ecf1;
        border: 2px solid #17a2b8;
        color: #0c5460;
    }
    
    .data-info {
        margin-left: 40px;
        margin-top: 15px;
        font-style: italic;
        color: #666;
    }
    
    .pagination-controls {
        margin-left: 40px;
        margin-top: 20px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }
    
    .btn-page {
        background-color: #6679A1;
        color: white;
        padding: 8px 16px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s;
        border: 2px solid #333;
    }
    
    .btn-page:hover {
        background-color: #5568a0;
        color: white;
        text-decoration: none;
    }
    
    .page-info {
        font-weight: bold;
        color: #333;
        padding: 8px 16px;
        background: white;
        border: 2px solid #333;
        border-radius: 5px;
    }
    
    /* Responsive design */
    @media (max-width: 768px) {
        .notebook-container {
            margin: 10px;
            padding: 15px;
        }
        
        .search-input {
            width: 100%;
            max-width: 250px;
        }
        
        .data-table {
            font-size: 12px;
            margin-left: 20px;
            width: calc(100% - 40px);
        }
        
        .data-table th,
        .data-table td {
            padding: 8px 5px;
        }
        
        .page-header,
        .search-section {
            margin-left: 20px;
        }
        
        .alert-message,
        .data-info,
        .pagination-controls {
            margin-left: 20px;
            margin-right: 20px;
        }
    }
</style>


<section id="kelompok">
    <div class="notebook-container">
        <!-- Spiral binding effect -->
        <div class="spiral-binding">
            @for($i = 0; $i < 20; $i++)
                <div class="spiral-ring" style="left: {{ $i * 55 }}px;"></div>
            @endfor
        </div>
        
        <div class="notebook-paper">
            <!-- Search Section -->
            <div class="search-section">
                <form method="GET" action="{{ url('/group') }}">
                    <label class="search-label">Search:</label>
                    <input type="text" 
                           name="search" 
                           class="search-input"
                           placeholder="Search by name/NIM/group name/mentor name"
                           value="{{ request()->input('search') }}">
                    <button class="btn-search" type="submit">Search</button>
                </form>
            </div>
            
            <!-- Alert Messages -->
            @if($query && $members->isEmpty())
                <div class="alert-message alert-warning">
                    Mohon maaf, hasil "{{ $query }}" tidak ditemukan. Silahkan mencari kembali
                </div>
            @endif
            
            @if(!$query && $members->isEmpty())
                <div class="alert-message alert-info">
                    Belum ada data member yang tersedia.
                </div>
            @endif
            
            <!-- Data Table -->
            @if($members->isNotEmpty())
                @php
                    $chunkedMembers = $members->chunk(10);
                    $totalPages = $chunkedMembers->count();
                    $currentPage = request()->get('page', 1);
                    $currentPage = max(1, min($currentPage, $totalPages));
                    $currentMembers = $chunkedMembers->get($currentPage - 1, collect());
                    $startNumber = ($currentPage - 1) * 10;
                @endphp
                
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIM</th>
                            <th>NAME</th>
                            <th>GROUP NAME</th>
                            <th>MENTOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($currentMembers as $key => $member)
                        <tr>
                            <td>{{ $startNumber + $key + 1 }}</td>
                            <td>{{ $member->nim }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->group_name }}</td>
                            <td>{{ $member->mentor_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <!-- Pagination Controls -->
                @if($totalPages > 1)
                    <div class="pagination-controls">
                        @if($currentPage > 1)
                            <a href="{{ request()->fullUrlWithQuery(['page' => $currentPage - 1]) }}" class="btn-page">‹ Previous</a>
                        @endif
                        
                        <span class="page-info">
                            Page {{ $currentPage }} of {{ $totalPages }}
                        </span>
                        
                        @if($currentPage < $totalPages)
                            <a href="{{ request()->fullUrlWithQuery(['page' => $currentPage + 1]) }}" class="btn-page">Next ›</a>
                        @endif
                    </div>
                @endif
                
                <!-- Data Info -->
                <div class="data-info">
                    Menampilkan {{ $currentMembers->count() }} dari {{ $members->count() }} data
                    @if($query)
                        dari pencarian "{{ $query }}"
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
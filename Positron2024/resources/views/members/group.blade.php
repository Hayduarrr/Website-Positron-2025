@extends('layouts.app')

@section('title', 'Group Page')

@section('content')


<section id="kelompok">
@if($query)
            @if($members->isEmpty())
                <div class="alert alert-warning">
                    Mohon maaf, hasil "{{ $query }}" tidak ditemukan. Silahkan mencari kembali
                </div>
           
            @endif
        @endif
    <div class="container mt-5">
        <h1>Group List</h1>
        <form method="GET" action="{{ url('/group') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by name/NIM/group name/mentor name" value="{{ request()->input('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" style="margin-left:20px;">Search</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Name</th>
                    <th>Group Name</th>
                    <th>Mentor Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $key => $member)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $member->nim }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->group_name }}</td>
                    <td>{{ $member->mentor_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
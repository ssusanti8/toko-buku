@extends('layouts.admin')

@section('content')
<div class="card">
            <div class="card-header">
                <h3>User
                   
                </h3>     
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Data user belum Tersedia.
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection

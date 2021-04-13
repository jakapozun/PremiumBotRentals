@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Users</h1>

        <div class="row">
            @foreach($users as $user)
                <div class="col-sm-12 text-left mb-1">
                    <div class="border bg-white p-1">
                        <p>#{{ $user->id }} | {{ $user->email }} | {{ $user->name }}</p>
                        <span>CREATED AT: {{ $user->created_at }}</span>
                        <span> /// # OF LISTINGS: {{ $user->listings->count() }}</span>
                        <span> /// # OF RENTALS: {{ $user->rentals->count() }}</span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

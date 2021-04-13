@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">{{$user->name}}'s Settings</h1>
            <p class="lead">Username: {{ $user->name }}</p>
            <p class="lead">Email: {{ $user->email }}</p>
            <p class="lead">Password:
                <button class="btn btn-sm btn-outline-dark">Change Password</button></p>
            <hr class="my-4">
            <p class="lead">Listings: {{ $user->listings->count() }}
                <button class="btn btn-primary">View My Listings</button></p>
            <p class="lead">Rentals: {{ $user->rentals->count() }}
                <button class="btn btn-primary">View My Rentals</button></p>
        </div>
    </div>
@endsection

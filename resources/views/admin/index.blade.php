@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            <a href="{{ route('admin-bots') }}" class="text-white">View / Add bots</a>
        </h1>

        <h1>
            <a href="{{ route('admin-users') }}" class="text-white">View Users</a>
        </h1>

        <h1>
            <a href="{{route('admin-listings')}}" class="text-white">View Listings</a>
        </h1>

        <h1>
            <a href="{{ route('admin-rentals')  }}" class="text-white">View Rentals</a>
        </h1>
    </div>
@endsection

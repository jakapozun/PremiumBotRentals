@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listings</h1>

        <div class="row">
            @foreach($listings as $listing)
                <div class="col-sm-12 text-left mb-1">
                    <div class="border bg-white p-1">
                        <p>#{{ $listing->id }} | {{ $listing->user->email }}</p>
                        <span>{{ $listing->bot->bot_name }}</span>
                        <span>- FROM: {{ $listing->date_from }}</span>
                        <span>- TO: {{ $listing->date_to }}</span>
                        <span>- PRICE: {{ $listing->price }}</span>
                        <span>- CREATED AT: {{ $listing->created_at }}</span>
                        <span>- STATUS: {{ $listing->status }}</span><br>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

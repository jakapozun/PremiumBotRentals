@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Rentals</h1>

        <div class="row">
                @foreach($rentals as $rent)
                <div class="col-sm-12 text-left mb-1">
                    <div class="card">
                        <div class="card-header">
                            Rental #{{$rent->id}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">User: {{ $rent->user->name }} | {{ $rent->user->email }}</h5>
                            <p class="card-text">PRICE: {{ $rent->listing->price }}</p>
                            <p class="card-text">LICENSE KEY: {{ $rent->listing->licence_key }}</p>
                            <p class="card-text">SETUP GUIDE: {{ $rent->listing->setup_guide }}</p>
                            <p class="card-text">STATUS RENTAL: {{ $rent->status }}</p>
                            <p class="card-text">STATUS LISTING: {{ $rent->listing->status }}</p>
                        </div>

                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

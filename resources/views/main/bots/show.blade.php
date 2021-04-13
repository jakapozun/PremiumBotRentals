@extends('layouts.app')


@section('content')
    <div class="container">
            <div class="jumbotron">
                <h1 class="display-4 text-center">{{ $bot->bot_name }}</h1>
                <h3 class="text-center">Available listings</h3>
                <hr class="my-4">
                @foreach($bot->listings as $listing)
                <div class="card mb-1">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="col-sm-6">
                                    <strong>Start:</strong> {{ $listing->date_from }}
                                    <strong>End:</strong> {{ $listing->date_to }}
                                    <strong>Total days:</strong> {{ (strtotime($listing->date_to) - strtotime($listing->date_from)) / (60 * 60 * 24)  }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-sm-6">
                                    Price: {{ $listing->price }}$
                                </div>
                                <div class="col-sm-6 text-right">
                                <a href="">
                                    <button class="btn btn-sm btn-success">Rent It</button>
                                </a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                    @endforeach
            </div>

    </div>
@endsection

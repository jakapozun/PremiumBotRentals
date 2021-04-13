@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center">{{ $bot->bot_name }}</h1>
            <h3 class="text-center">Available listings</h3>
            <hr class="my-4">
            @foreach($bot->listings as $listing)

                @if($listing->status == 'available')
                {{  $total_days = (strtotime($listing->date_to) - strtotime($listing->date_from)) / (60 * 60 * 24) }}
                <div class="card mb-1">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="col-sm-6">
                                    <strong>Start:</strong> {{ $listing->date_from }}
                                    <strong>End:</strong> {{ $listing->date_to }}
                                    <strong>Total
                                        days:</strong> {{ $total_days  }}
                                </div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="col-sm-6">
                                    Price: {{ $listing->price }}$
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                            data-target="#exampleModal">Rent It
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <form action="{{ route('submit-rental', $listing) }}" method="POST">
                                            @csrf
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Confirm
                                                            Rental</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <p>You are about to rent <u>{{ $listing->bot->bot_name }}</u>
                                                            for {{ $total_days }}days.</p>
                                                        <p>FROM: {{ $listing->date_from }}</p>
                                                        <p>TO: {{ $listing->date_to }}.</p>
                                                        <h4>Price is {{ $listing->price }}$ minus 10% service fee</h4>
                                                        <h3>Total price: {{ $listing->price * 0.9 }}</h3>

                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="terms_conditions" name="terms_conditions" required>
                                                            <label class="form-check-label" for="terms_conditions">I agree
                                                                to <a
                                                                    href="{{ route('legal') }}">terms & conditions</a>.*</label>
                                                        </div>
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                @endif
            @endforeach
        </div>

    </div>
@endsection

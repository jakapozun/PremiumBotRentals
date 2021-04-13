@extends('layouts.app')


@section('content')
    <div class="container">

        <h1>Choose the right bot for you</h1>

        <div class="row">
            @foreach($bots as $bot)
            <div class="col-sm-4 bot">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                         src="storage/{{ $bot->bot_img }}"
                         alt="bot_{{$bot->bot_name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$bot->bot_name}}</h5>
                        <p class="small">{{ $bot->description }}</p>
                        <a href="{{ route('show-bot', $bot) }}" class="btn btn-primary">Check Availability</a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>


    </div>
@endsection

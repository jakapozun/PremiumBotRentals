@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Add Bots:</h1>

        <form action="{{ route('submit-bot') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="bot_name">Bot Name</span>
                </div>
                <input type="text" class="form-control"aria-label="bot_name" aria-describedby="bot_name" name="bot_name">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="win_link">Win Download Link</span>
                </div>
                <input type="text" class="form-control" aria-label="win_link" aria-describedby="win_link" name="win_download">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="mac_link">Mac Download Link</span>
                </div>
                <input type="text" class="form-control" aria-label="mac_link" aria-describedby="mac_link" name="mac_download">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="websites">Websites</span>
                </div>
                <input type="text" class="form-control" aria-label="websites" aria-describedby="websites" name="websites">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="description">Description</span>
                </div>
                <input type="text" class="form-control" aria-label="description" aria-describedby="description" name="description">
            </div>

            <div class="form-group">
                <input type="file" class="form-control-file" id="bot_img" name="bot_img">
            </div>

            <button type="submit" class="btn btn-primary">Submit Bot</button>
            <button type="reset" class="btn btn-danger">Reset Form</button>
        </form>

        <h2>Bot List:</h2>
        <div class="row">
            <ul>
            @foreach($bots as $bot)
                <li>{{ $bot->id }} | {{ $bot->bot_name }} | {{ $bot->description }} | @if($bot->bot_img)Has image @else No image @endif</li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection

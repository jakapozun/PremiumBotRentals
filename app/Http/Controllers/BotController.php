<?php

namespace App\Http\Controllers;

use App\Models\Bot;
use Illuminate\Http\Request;

class BotController extends Controller
{
    public function indexAdmin()
    {
        $bots = Bot::all();
        return view('admin.bots', compact('bots'));
    }

    public function index()
    {
        $bots = Bot::all();
        return view('main.bots.all-bots', compact('bots'));
    }

    public function show(Bot $bot)
    {
        return view('main.bots.show', compact('bot'));
    }

    public function create(Request $request)
    {
        $inputs = $request->validate([
            'bot_name' => 'required|string',
            'win_download' => 'nullable|string',
            'mac_download' => 'nullable|string',
            'websites' => 'nullable|string',
            'description' => 'required|string',
            'bot_img' => 'image|nullable'
        ]);

        if($request->bot_img){
            $inputs['bot_img'] = $request->bot_img->store('uploads', 'public');
        }

        Bot::create($inputs);

        return back();
    }
}

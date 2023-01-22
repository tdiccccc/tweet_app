<?php

namespace App\Http\Controllers\Tweet;

use App\Models\Tweet;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\CreateRequest;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        $tweet = new Tweet;
        $tweet->user_id = $request->user_id(); //ここでuser_idを保存
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()->route('tweet.index');
    }
}

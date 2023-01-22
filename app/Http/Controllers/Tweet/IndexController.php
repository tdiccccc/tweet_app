<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Services\TweetService;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\View\Factory;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweetService = new TweetService(); //つぶやきのインスタンスを作成
        $tweets = $tweetService->getTweets(); //つぶやきの一覧を取得
        // dd($tweets);
        return view('tweet.index')
            ->with('tweets',$tweets);
    }
}

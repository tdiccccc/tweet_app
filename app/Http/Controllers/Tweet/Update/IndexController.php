<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Models\Tweet;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $tweetId = (int) $request->route('tweetId');
        $tweet = Tweet::where('id', $tweetId)->firstOrFail();
        // if (is_null($tweet)) {
        //     throw new NotFoundHttpException('存在しなつぶやきです');
        // }
        return view('tweet.update')->with('tweet', $tweet);
    }
}

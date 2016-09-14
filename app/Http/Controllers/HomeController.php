<?php

namespace App\Http\Controllers;

use  \Socialize;
use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use App\Board;

use GuzzleHttp\Client;
use GuzzleHttp\Promise;

use GuzzleHttp\Exception\RequestException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $except = ['loginSlack','index'];
        $this->middleware('auth',['except' => $except]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instaPost = $this->socialMedia();
        $members['board'] = Board::where('position_group','board')->get();
        $members['chair'] = Board::where('position_group','chair')->get();
        return view('index',compact('instaPost','members'));
    }



    private function socialMedia()
    {
        // $fbAPIGraphBase = "https://graph.facebook.com/v2.7";
        // $fb_access_token = env('fb_access_token');
        // $fbAPI  = "$fbAPIGraphBase/shpecsun/posts/?limit=3&access_token=$fb_access_token&fields=permalink_url,message,created_time";

        $instAPIBase = "https://api.instagram.com/v1";
        $insta_access_token = env('insta_access_token');
        $instaAPI = "$instAPIBase/users/self/media/recent?count=3&access_token=$insta_access_token";

        // https://api.instagram.com/v1/users/self/?access_token=
        $client = new Client();
        
        $promises = [
            // 'fb'    => $client->getAsync($fbAPI),
            'insta' => $client->getAsync($instaAPI)
        ];

        // Wait on all of the requests to complete. Throws a ConnectException
        // if any of the requests fail
        $results = Promise\unwrap($promises);

        // $fbResponse =  json_decode( $results['fb']->getBody(),true );
        // $fbPost = $fbResponse['data'][0];

        $instaResponse =  json_decode( $results['insta']->getBody(),true );
        $instaPost = $instaResponse['data'];

        foreach ($instaPost as &$post) {
            $post['caption']['created_time'] = date('F d, Y - h:i A',$post['caption']['created_time']);
        }
        return $instaPost;
    }

    public function loginSlack()
    {
        return Socialize::with('slack')->scopes(['identity.basic,identity.email,identity.team,identity.avatar'])->redirect();
    }
}

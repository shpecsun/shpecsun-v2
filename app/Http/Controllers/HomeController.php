<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use App\boardmembers;
use App\blog;
use Auth;

use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use GuzzleHttp\Exception\RequestException;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instaPost = $this->socialMedia();
        $members['board'] = boardmembers::where('position_group','board')->with('image','links')->orderBy('order')->get();
        $members['chair'] = boardmembers::where('position_group','chair')->with('image','links')->orderBy('order')->get();
        $blogs = blog::with('author_image')->take(3)->get();
        return view('index', compact('instaPost','members','blogs'));
    }
    public function stories()
    {
        $blogs = blog::with('banner_image')->inRandomOrder()->get();
        return view('blogs',compact('blogs'));
    }
    public function story($slug)
    {
        $blog = blog::where('slug',$slug)->with('author_image','banner_image')->first();
        return view('story',compact('blog'));
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
            
            if (isset($post['caption']['text'])) {
                $post['caption']['text'] = Str::words($post['caption']['text'],40," ...");
            }else{
                $post['caption']['text'] = "";
            }
        }
        return $instaPost;
    }

    public function loginSlack()
    {
        return Socialize::with('slack')->scopes(['identity.basic,identity.email,identity.team,identity.avatar'])->redirect();
    }
}


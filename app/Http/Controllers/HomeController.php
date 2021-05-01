<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Instagram API
        $postIGimage = Http::get('https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,username,timestamp&access_token=IGQVJXV2N2VDktLVViUUREcnpTb3hYT0pvelVzWDhsSGg5Y3ktNHFpbnlWUmM0em9aSTZABbzIwc2FmdndzYXVMODl0X01FaEVTRTNma29TazFDUHp6bUxKUHhTS2p4c3R0bUpDamdzOHUyOU14MmNITQZDZD');
        $postcount = Http::get('https://graph.instagram.com/me?fields=id,username,media_count&access_token=IGQVJXV2N2VDktLVViUUREcnpTb3hYT0pvelVzWDhsSGg5Y3ktNHFpbnlWUmM0em9aSTZABbzIwc2FmdndzYXVMODl0X01FaEVTRTNma29TazFDUHp6bUxKUHhTS2p4c3R0bUpDamdzOHUyOU14MmNITQZDZD');
       
        $count = $postcount['media_count'];
        $username = $postcount['username'];
        $media = [];

        foreach( $postIGimage['data'] as $images){
            $media[] = $images['media_url'];
        }



        //Youtube API
        $youtube = Http::get('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCf19aKBWnsY5l3bjyYw-z1g&key=AIzaSyBxX3MCu1tsPNp8LJcIacNS9sGJLk6sQlw');
        $youtubeVidio = Http::get('https://www.googleapis.com/youtube/v3/search?key=AIzaSyBxX3MCu1tsPNp8LJcIacNS9sGJLk6sQlw&channelId=UCf19aKBWnsY5l3bjyYw-z1g&maxResults=1&part=snippet&order=date');

        $response = $youtube['items'][0]['snippet']['thumbnails']['medium']['url'];
        $title= $youtube['items'][0]['snippet']['title'];
        $vidiocount= $youtube['items'][0]['statistics']['videoCount'];
        $vidioid = $youtubeVidio['items'][0]['id']['videoId'];
        $vidioImage = $youtubeVidio['items'][0]['snippet']['thumbnails']['medium']['url'];

        $agenda = DB::table('agenda')->orderBy('id', 'desc')->limit(3)->get();
        $galery = DB::table('galery')->orderBy('id', 'desc')->limit(8)->get();
        $event = DB::table('events')->orderBy('id', 'desc')->limit(1)->get();
        $eventdetail = DB::table('event_detail')->get();
        $moto = DB::table('moto')->get();
        $organisasi = DB::table('organisasi')->get();

        // return response()->json($eventdetail);
        return view('welcome', compact('media','username','vidiocount','title','agenda','galery', 'event','eventdetail', 'moto','organisasi', 'response', 'vidioid','vidioImage'));
    }
    public function contact()
    {

        return view('contact');
    }
    public function registrasi(Request $request)
    {
        $userwifi = new User;
        $userwifi->name = $request->name;
        $userwifi->email = $request->email;
        $userwifi->password = bcrypt($request->password);
        $userwifi->status_langganan = $request->status_langganan;
        $userwifi->save();

        $posision = new UserPosision;
        $posision->user_id = $userwifi->id;
        $posision->posision_id = 2;
        $posision->save();



        // $wifi = new StatusLangganan;
        // $wifi->user_id =$userwifi->id;
        // $wifi->wifi_id = 2;
        // $wifi->save();

        

        $hasrole = new HasRole;
        $hasrole->role_id = 8;
        $hasrole->model_type = 'App\User';
        $hasrole->model_id = $userwifi->id;
        $hasrole->save();

        DB::table('registrasi')->insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        \Mail::to($request->email)->send(new \App\Mail\NewUserNotification($detail));



        return back();
    }
    public function about()
    {
        return view('about');
    }
}

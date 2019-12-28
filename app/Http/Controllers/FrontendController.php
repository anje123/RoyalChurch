<?php

namespace App\Http\Controllers;
use App\Event;
use App\News;
use App\Profile;



use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('welcome')->with('three_event' , Event::orderBy('created_at','desc')->take(3)->get())
                              ->with('three_news', News::orderBy('created_at','desc')->take(3)->get())
                              ->with('profile',Profile::orderBy('created_at','desc')->first());
    }



   

    public function event(){
        return view('event')->with('profile',Profile::orderBy('created_at','desc')->first())
                            ->with('events' , Event::orderBy('created_at','desc')->get());
    }

}

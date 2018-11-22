<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Achievement;
use App\Activitys;
use App\Image;
use App\News;
use App\Post;
use App\Profile;
use App\Project;
use App\Video;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\PendingMail;
use App\Mail\SendMailable;  

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
     public function about()
    {
        $activity = Activitys::orderBy('intervaltime', 'desc')->take(3)->get();
        $achievement = Achievement::orderBy('achievementName', 'desc')->take(3)->get();
       

        return view('about',compact('activity','achievement'));
    }
     public function blog()
    {
        $data = News::paginate(6);

        return view('blog',compact('data'));
    }
     public function blogcd()
    {
        $data = Post::paginate(6);

        return view('blogcd', compact('data'));
    }
     public function contact()
    {
        return view('contact');
    }
     public function library()
    {
        $video = Video::paginate(6);
        $image = Image::paginate(6);
        return view('library',compact('video','image'));
    }
     public function project()
    {
        $data = Project::paginate(9);
        return view('project',compact('data'));
    }
     public function admin()
    {
        $this->middleware('auth');
        return view('layouts.admin');
    }
     public function feedbackcus(Request $request)
    {
        $name = 'Krunal';
        Mail::to('hieule1191997@gmail.com')
            ->send(new SendMailable());

        return 'Email was sent';
        // 
    }
        // return response()->json(array(
        //     'status' => 400,
        //     'msg'    => 'fail',
        // ));
}

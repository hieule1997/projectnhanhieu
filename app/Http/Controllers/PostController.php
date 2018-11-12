<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use \Vmorozov\FileUploads\Uploader;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function index()
    // {
    //     //
    //     $data = Post::paginate(6);

    //     return view('blog',compact('data'));
    // }
    
    public function index()
    {
        //
        $data = Post::paginate(6);

        return view('layouts.post.index',compact('data'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts.post.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Post();
        $model->fill($request->all());
        $model->image = Uploader::uploadFile($request->file('image'));
        $model->createDate = date("Y-m-d H:i:s");
        $smg = $model->save();
        return Redirect(route("post.create"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Post::find($id);
        return view("layouts.post.edit",compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Post::findOrFail($id);
        $pic = $model->image;
        // dd($request);

        $model->fill($request->all());
        if( isset($request->image))
            $model->image = Uploader::uploadFile($request->file('image'));
        else {
            $model->image = $pic;
        }
        $model->createDate = date("Y-m-d H:i:s");
        $model->update();
        return Redirect( route("post.edit",$id) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id);

        $msg = $post->delete();

        if ($msg) {
            return response()->json(array(
                'status' => 204,
                'msg'    => 'success',
            ));
        }
        return response()->json(array(
            'status' => 400,
            'msg'    => 'fail',
        ));
    }
}

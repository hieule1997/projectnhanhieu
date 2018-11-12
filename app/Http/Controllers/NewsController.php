<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use \Vmorozov\FileUploads\Uploader;
class NewsController extends Controller
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
    public function index()
    {
        $data = News::paginate(6);

        return view('layouts.news.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.news.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new News();
        $model->fill($request->all());
        $model->newsImage = Uploader::uploadFile($request->file('newsImage'));
        $model->newsDate = date("Y-m-d H:i:s");
        $smg = $model->save();
        return Redirect(route("news.create"));
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
        $model = News::find($id);
        return view("layouts.news.edit",compact('model'));
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
        $model = News::findOrFail($id);
        $pic = $model->image;
        $model->fill($request->all());
        if( isset($request->newsImage))
            $model->newsImage = Uploader::uploadFile($request->file('newsImage'));
        else {
            $model->image = $pic;
        }
        $model->createDate = date("Y-m-d H:i:s");
        $model->update();
        return Redirect( route("news.edit",$id) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $new = News::find($id);

        $msg = $new->delete();

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

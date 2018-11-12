<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use \Vmorozov\FileUploads\Uploader;

class ProjectController extends Controller
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
        $data = Project::paginate(10);
        return view('layouts.project.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('layouts.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $model = new Project();
        $model->projectName = $request->projectName;
        $model->projectTitle = $request->title;
        $model->projectImage = Uploader::uploadFile($request->file('projectImage'));
        $model->projectInfor = $request->projectInfor;
        $model->projectText = $request->content;
        $smg = $model->save();
        return Redirect(route("project.create"));
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
        $model = Project::find($id);

        return view("layouts.project.edit",compact('model'));
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
        $model = Project::findOrFail($id);
        $pic = $model->projectImage;
        // dd($request);
        $model->fill($request->all());
        if( isset($request->projectImage))
            $model->projectImage = Uploader::uploadFile($request->file('projectImage'));
        else {
            $model->projectImage = $pic;
        }
        $model->update();
        return Redirect( route("project.edit",$id) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $project = Project::find($id);

        $msg = $project->delete();

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

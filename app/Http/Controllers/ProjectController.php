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
        return view('layouts.project.index');
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
        
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
        $model->projectImage = 'uploads/'.$_FILES['file']['name'];
        $model->projectInfor = $request->projectInfor;
        $model->projectText = $request->content;
        $smg = $model->save();
        if($smg)
        return response()->json(array('status' => 204,
            'message'=>'them thanh cong',
         ));
            // else {
            //     return response()->json($arrayName = array('status' => 400,
            //     'message'=>'Thêm Thành Công',
            //  ));
            // }
       
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

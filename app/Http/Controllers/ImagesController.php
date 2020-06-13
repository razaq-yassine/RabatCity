<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;


class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'image'=>'image|nullable|max:1999'
        ]);
        //File Uploading
        if ($request->hasFile('image')) {
            // extention
            $extension=$request->file('image')->getClientOriginalExtension();
            // fileName To Store
            $fileNameToStore=Auth::user()->name.'.'.$extension;

            //UPLOAD THE IMAGE
            $image = $request->file('image');
//            $realpath = $request->file('image')->storeAs('public/photos/avatars',$fileNameToStore);
            // resize
            // create an image manager instance with favored driver
                $manager = new ImageManager(array('driver' => 'gd'));
               // to finally create image instances
            $image = $manager->make($image)->resize(300, 300)->save(public_path('/../storage/app/public/photos/avatars/'.$fileNameToStore));
            // Adding image to user DataBase
            $path = 'storage/photos/avatars/'.$fileNameToStore;
            $user = User::find(Auth::user()->id);
            $user->image = $path;
            $user->save();
            return back()->withInput();
        }
        else{
           return back()->withInput();
        }


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


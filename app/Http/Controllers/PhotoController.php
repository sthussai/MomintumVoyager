<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photos = Photo::all();

        return view('photos.index', ['photos'=>$photos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   

        $photo = new Photo();

        $photo->name = request()->name;
        $photo->description = request()->description;
        $photo->url = request()->url;

        $photo->save();
        
        return redirect('/photos');

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
        $photo = Photo::find($id);
        
        $nextID = Photo::where('id', '>', $photo->id)->min('id');
        $previousID = Photo::where('id', '<', $photo->id)->max('id');
       //if($nextID)
        //return $nextID;
        return view('photos.show', ['photo'=>$photo,'nextID'=>$nextID, 'previousID'=>$previousID]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $photo = Photo::find($id);
        return view('photos.edit',['photo'=>$photo]);
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
        // dd(request()->all());
        
        $photo = Photo::find($id);

        $photo->name = $request->name;
        $photo->description = $request->description;
        $photo->url = $request->url;
        
        $photo->save();

        return redirect('/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd(request()->all());
        
        $photo = Photo::find($id)->delete();

        return redirect('/photos');

    }
}

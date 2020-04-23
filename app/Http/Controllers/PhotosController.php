<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $phoneId)
    {
        return view('createPhoto')->with('phoneId', $phoneId);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [

          'photo' => 'required|image'

      ]);
      //Gets image name with extension
      $filenameWithExtension = $request->file('photo')->getClientOriginalName();
      $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
      $extension = $request->file('photo')->getClientOriginalExtension();
      $filenameToStore = $filename . '_' . time() . '.' . $extension;

      //Saves image
      $request->file('photo')->storeAs('public/phones/' . $request->input('phone-id'), $filenameToStore);
      //dd($path);
      $photo = new Photo();

      $photo->phone_id = $request->input('phone-id');
      $photo->size = $request->file('photo')->getSize();
      $photo->photo = $filenameToStore;
      $photo->save();

      return redirect('/phones/' . $request->input('phone-id'))->with('success', "Photo uploaded successfully");
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
      $photo = Photo::find($id);

      //dd(Storage::delete('/storage/phones/' . $photo->phone_id. '/' .$photo->photo));

      if (Storage::delete('public/phones/' . $photo->phone_id. '/' .$photo->photo)) {
        $photo->delete();

        return redirect('/home')->with('danger', "Photo deleted successfully");
      }
    }
}

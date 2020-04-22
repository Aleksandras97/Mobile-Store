<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::get();

        return view('home')->with('phones', $phones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPhone');
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
          'brand' => 'required',
          'model' => 'required',
          'screenSize' => 'required',
          'ramSize' => 'required',
          'storageSize' => 'required',
          'color' => 'required',
          'price' => 'required|numeric',

      ]);

      $phone = new Phone();

      $phone->brand = $request->input('brand');
      $phone->model = $request->input('model');
      $phone->screen_size = $request->input('screenSize');
      $phone->RAMsize = $request->input('ramSize');
      $phone->storage_size = $request->input('storageSize');
      $phone->color = $request->input('color');
      $phone->price = $request->input('price');
      $phone->user_id = Auth::id();
      $phone->save();

      return redirect()->to('/home')->with('success', "Phone added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone = Phone::find($id);

        return view('phone')->with('phone', $phone);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Phone::find($id);
        return view('editPhone')->with("phone", $phone);
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
      $this->validate($request, [
          'brand' => 'required',
          'model' => 'required',
          'screenSize' => 'required',
          'ramSize' => 'required',
          'storageSize' => 'required',
          'color' => 'required',
          'price' => 'required|numeric',

      ]);

      $phone = Phone::find($id);

      $phone->brand = $request->input('brand');
      $phone->model = $request->input('model');
      $phone->screen_size = $request->input('screenSize');
      $phone->RAMsize = $request->input('ramSize');
      $phone->storage_size = $request->input('storageSize');
      $phone->color = $request->input('color');
      $phone->price = $request->input('price');
      $phone->save();

      return redirect()->to('/home')->with('success', "Phone edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::find($id);

        $phone->delete();

        return redirect()->to('/home')->with('danger', "Phone deleted successfully");
    }
}

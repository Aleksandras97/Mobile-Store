<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use Illuminate\Support\Facades\Validator;

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

        return response()->json($phones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
          'brand' => 'required',
          'model' => 'required',
          'screen_size' => 'required',
          'RAMsize' => 'required',
          'storage_size' => 'required',
          'color' => 'required',
          'price' => 'required',

      ]);

      if ($validator->fails()) {
        return ['response' => $validator->messages(), 'success' => false];
          // return redirect('post/create')
          //             ->withErrors($validator)
          //             ->withInput();
      }

      $phone = new Phone();
      $phone->brand = $request->input('brand');
      $phone->model = $request->input('model');
      $phone->screen_size = $request->input('screen_size');
      $phone->RAMsize = $request->input('RAMsize');
      $phone->storage_size = $request->input('storage_size');
      $phone->color = $request->input('color');
      $phone->price = $request->input('price');
      $phone->save();

      return response()->json($phone);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phones = Phone::find($id);

        return response()->json($phones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = Validator::make($request->all(), [
          'brand' => 'required',
          'model' => 'required',
          'screen_size' => 'required',
          'RAMsize' => 'required',
          'storage_size' => 'required',
          'color' => 'required',
          'price' => 'required',

      ]);

      if ($validator->fails()) {
        return ['response' => $validator->messages(), 'success' => false];
          // return redirect('post/create')
          //             ->withErrors($validator)
          //             ->withInput();
      }

      $phone =  Phone::find($id);
      $phone->brand = $request->input('brand');
      $phone->model = $request->input('model');
      $phone->screen_size = $request->input('screen_size');
      $phone->RAMsize = $request->input('RAMsize');
      $phone->storage_size = $request->input('storage_size');
      $phone->color = $request->input('color');
      $phone->price = $request->input('price');
      $phone->save();

      return response()->json($phone);
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

        return ['response' => 'Phone deleted', 'success' => true];
    }
}

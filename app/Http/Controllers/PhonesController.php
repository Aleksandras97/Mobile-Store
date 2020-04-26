<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhonesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $phones = Phone::orderBy('created_at', 'desc')->paginate(3);

        $latestPhones = Phone::latestPhones();

        $cheapPhones = Phone::cheapPhones();

        $forGaming = Phone::forgamingPhones();

        return view('phones.index', compact('latestPhones', 'cheapPhones', 'forGaming'));
    }

    public function search(Request $request)
    {
      $request->validate([
        'query' => 'min:3',
      ]);

      $query = $request->input('query');

      $phones = Phone::where('brand', 'like', "%$query%")
                     ->orWhere('model', 'like', "%$query%")
                     ->orWhere('screen_size', 'like', "%$query%")
                     ->orWhere('RAMsize', 'like', "%$query%")
                     ->orWhere('storage_size', 'like', "%$query%")->paginate(3);

      return view('phones.search-rezults', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      $this->validate(request(), [

          'brand' => 'required',
          'model' => 'required',
          'screenSize' => 'required',
          'ramSize' => 'required',
          'storageSize' => 'required',
          'color' => 'required',
          'price' => 'required|numeric',
          'cover-image' => 'required|image'

      ]);
      //dd(request('ramSize'));
      //Gets image name with extension
      $filenameWithExtension = request()->file('cover-image')->getClientOriginalName();
      $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
      $extension = request()->file('cover-image')->getClientOriginalExtension();
      $filenameToStore = $filename . '_' . time() . '.' . $extension;
      //Saves image
      request()->file('cover-image')->storeAs('public/phones', $filenameToStore);

      //$user_id = Auth::id();
      Phone::create([

        'brand' => request('brand'),
        'model' => request('model'),
        'screen_size' => request('screenSize'),
        'RAMsize' => request('ramSize'),
        'storage_size' => request('storageSize'),
        'color' => request('color'),
        'price' => request('price'),
        'cover_image' => $filenameToStore,
        'user_id' => Auth::id()

      ]);
      return redirect()->home()->with('success', "Phone added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone = Phone::with('photos')->find($id);


        return view('phones.show')->with('phone', $phone);
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
        return view('phones.edit')->with("phone", $phone);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $this->validate(request(), [
          'brand' => 'required',
          'model' => 'required',
          'screenSize' => 'required',
          'ramSize' => 'required',
          'storageSize' => 'required',
          'color' => 'required',
          'price' => 'required|numeric',
          'cover-image' => 'image'

      ]);
      if(request()->file('cover-image') == null){

          $phone = Phone::find($id);

          $phone->brand = request()->input('brand');
          $phone->model = request()->input('model');
          $phone->screen_size = request()->input('screenSize');
          $phone->RAMsize = request()->input('ramSize');
          $phone->storage_size = request()->input('storageSize');
          $phone->color = request()->input('color');
          $phone->price = request()->input('price');
          $phone->save();



          return redirect()->home()->with('success', "Phone edited successfully");
      } else {
        $filenameWithExtension = request()->file('cover-image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = request()->file('cover-image')->getClientOriginalExtension();
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        //Saves image
        request()->file('cover-image')->storeAs('public/phones', $filenameToStore);

        $phone = Phone::find($id);

        if (Storage::delete('public/phones/'  .$phone->cover_image)) {

          $phone->brand = request()->input('brand');
          $phone->model = request()->input('model');
          $phone->screen_size = request()->input('screenSize');
          $phone->RAMsize = request()->input('ramSize');
          $phone->storage_size = request()->input('storageSize');
          $phone->color = request()->input('color');
          $phone->price = request()->input('price');
          $phone->cover_image = $filenameToStore;
          $phone->save();


          return redirect()->home()->with('success', "Phone edited successfully");
      }

      }




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

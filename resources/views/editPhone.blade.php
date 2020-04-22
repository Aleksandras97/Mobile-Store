@extends('layouts.app')

@section('content')

  <div class="container background p-4">
    <h1>Edit Your Phone</h1>
    <div class="row">
      <div class="col-md-5">
        <form method="post" action="/phones/{{ $phone->id }}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand" placeholder="Enter brand" value="{{ $phone->brand }}">
          </div>
          <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Ender model" value="{{ $phone->model }}">
          </div>
          <div class="form-group">
            <label for="screenSize">Screen Size</label>
            <input type="text" class="form-control" name="screenSize" id="screenSize" placeholder="Ender Screen Size" value="{{ $phone->screen_size }}">
          </div>
          <div class="form-group">
            <label for="ramSize">RAM Size</label>
            <input type="text" class="form-control" name="ramSize" id="ramSize" placeholder="Ender RAM Size" value="{{ $phone->RAMsize }}">
          </div>
          <div class="form-group">
            <label for="storageSize">Storage Size</label>
            <input type="text" class="form-control" name="storageSize" id="storageSize" placeholder="Ender Storage Size" value="{{ $phone->storage_size }}">
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" id="color" placeholder="Ender Color" value="{{ $phone->color }}">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="integer" class="form-control" name="price" id="price" placeholder="Ender Price" value="{{ $phone->price }}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </div>


@endsection

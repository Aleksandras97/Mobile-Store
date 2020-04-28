@extends('layouts.app')

@section('content')

  <div class="container background p-4 rounded">
    <h1>Edit Your Phone</h1>
    <div class="row">
      <div class="col-md-5">
        <form method="post" action="/phones/{{ $phone->id }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand" placeholder="Enter brand" value="{{ $phone->brand }}" required>
          </div>
          <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Ender model" value="{{ $phone->model }}" required>
          </div>
          <div class="form-group">
            <label for="screenSize">Screen Size (cm²)</label>
            <input type="integer" class="form-control" name="screenSize" id="screenSize" placeholder="Ender Screen Size (number)" value="{{ $phone->screen_size }}" required>
          </div>
          <div class="form-group">
            <label for="ramSize">RAM Size</label>
            <input type="integer" class="form-control" name="ramSize" id="ramSize" placeholder="Ender RAM Size (number)" value="{{ $phone->RAMsize }}" required>
          </div>
          <div class="form-group">
            <label for="storageSize">Storage Size</label>
            <input type="integer" class="form-control" name="storageSize" id="storageSize" placeholder="Ender Storage Size (number)" value="{{ $phone->storage_size }}" required>
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" id="color" placeholder="Ender Color" value="{{ $phone->color }}" required>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="integer" class="form-control" name="price" id="price" placeholder="Ender Price" value="{{ $phone->price }}" required>
          </div>
          <div class="form-group">
            <label for="cover-image">Cover Image</label>
            <input type="file" class="form-control" name="cover-image" id="cover-image">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </div>


@endsection

@extends('layouts.app')

@section('content')

  <div class="container background p-4 rounded">
    <h1>Add New Phone</h1>
    <div class="row">
      <div class="col-md-5">
        <form method="post" action="/phones" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand" placeholder="Enter brand" required>
          </div>
          <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model" id="model" placeholder="Ender model" required>
          </div>
          <div class="form-group">
            <label for="screenSize">Screen Size (cm²)</label>
            <input type="integer" class="form-control" name="screenSize" id="screenSize" placeholder="Ender Screen Size" required>
          </div>
          <div class="form-group">
            <label for="ramSize">RAM Size</label>
            <input type="integer" class="form-control" name="ramSize" id="ramSize" placeholder="Ender RAM Size (number)" required>
          </div>
          <div class="form-group">
            <label for="storageSize">Storage Size</label>
            <input type="integer" class="form-control" name="storageSize" id="storageSize" placeholder="Ender Storage Size (number)" required>
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" id="color" placeholder="Ender Color" required>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="integer" class="form-control" name="price" id="price" placeholder="Ender Price" required>
          </div>
          <div class="form-group">
            <label for="cover-image">Cover Image</label>
            <input type="file" class="form-control" name="cover-image" id="cover-image" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </div>


@endsection

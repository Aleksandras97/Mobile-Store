@extends('layouts.app')

@section('content')
<section class="page-section">

  <div class="container background p-4 rounded">
    <h1>Add New Photo</h1>
    <div class="row">
      <div class="col-md-5">
        <form method="post" action="{{ route('photo-store') }}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="phone-id" value="{{ $phoneId }}">
          <div class="form-group">
            <input type="file" class="form-control" name="photo" id="photo">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </div>
</section>


@endsection

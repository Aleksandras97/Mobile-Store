@extends('layouts.app')

@section('content')

<div class="container background">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>{{ $phone->brand }} <b>{{ $phone->model }}</b></h1>
      <p>

        <a href="/"><button type="button" name="button" class="btn btn-success m-2">Go back</button></a>
        @if(Auth::check())
          <a href="{{ route('photo-create', $phone->id) }}" class="btn btn-primary m-2">Upload New Photo</a>
          <a href="/phones/{{ $phone->id }}/edit"><button type="button" name="button" class="btn btn-primary m-2">Edit</button></a>
        @endif
      </p>
    </div>
  </section>

  <div class="row">
    <div class="col-md-5">
      <table class="table table-sm table-striped table-hover detail-table">
      <tbody>
        <tr>
          <th scope="row text-right">Brand:</th>
          <td>{{ $phone->brand}}</td>
        </tr>
        <tr>
          <th scope="row">Model:</th>
          <td>{{ $phone->model}}</td>
        </tr>
        <tr>
          <th scope="row">Screen Size:</th>
          <td>{{ $phone->screen_size}} cm²</td>
        </tr>
        <tr>
          <th scope="row">RAM Size:</th>
          <td>{{ $phone->RAMsize}}GB RAM</td>
        </tr>
        <tr>
          <th scope="row">Storage Size:</th>
          <td>{{ $phone->storage_size}}GB</td>

        </tr>
        <tr>
          <th scope="row">Color:</th>
          <td>{{ $phone->color}}</td>
        </tr>
        <tr>
          <th scope="row">Price:</th>
          <td>€ {{ $phone->price}}</td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="col-md-7">
      @if (count($phone->photos) > 0)
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" data-pause="hover">

          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <?php $pos=1 ?>
            @foreach ($phone->photos as $photo)
              <li data-target="#carousel-example-1z" data-slide-to="{{ $pos }}"></li>
              <?php $pos++ ?>
            @endforeach
          </ol>
          <!--/.Indicators-->
      @endif
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item peopleCarouselImg active">
              <a href="/storage/phones/{{ $phone->cover_image }}" data-size="1600x1067">
              <!-- cover img storage -->
                <img src="/storage/phones/{{ $phone->cover_image }}" alt="{{ $phone->cover_image }}" class="d-block w-50 img-thumbnail mx-auto">
              </a>
            </div>
            <!--/First slide-->
            @if (count($phone->photos) > 0)
              @foreach ($phone->photos as $photo)
                <!--Second slide-->
                <div class="carousel-item peopleCarouselImg">

                  <!-- phone photos storage -->
                  <img class="d-block w-50 img-thumbnail mx-auto" src="/storage/phones/{{ $photo->phone_id }}/{{ $photo->photo }}" alt="{{ $phone->cover_image }}" />
                  @if(Auth::check())
                    <form class="in-image" action="{{ route('photo-destroy', $photo->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" name="button" class="btn btn-danger"><i class="fas fa-times"></i></button>
                    </form>
                  @endif
                </div>
                <!--/Second slide-->
              @endforeach
            @endif
          </div>
          <!--/.Slides-->

          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->

        </div>
        <!--/.Carousel Wrapper-->
    </div>
    @if(Auth::check())
      <form class="pl-4" action="/phones/{{ $phone->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" name="button" class="btn btn-danger">Delete This Phone</button>
      </form>
    @endif
</div>



@endsection

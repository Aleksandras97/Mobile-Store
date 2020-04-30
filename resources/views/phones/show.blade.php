@extends('layouts.app')

@section('content')

<div class="container background p-4 rounded">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>{{ $phone->brand }} <b>{{ $phone->model }}</b></h1>
      <p>User: {{ $phone->user->name}}</p>
      <p>

        <a href="/"><button type="button" name="button" class="btn btn-success m-2">Go back</button></a>

          @if (Auth::id() == $phone->user_id && Auth::check())

            <a
              href="{{ route('photo-create', $phone->id) }}"
              class="btn btn-primary m-2">Upload New Photo
            </a>
            <a
              href="/phones/{{ $phone->id }}/edit"
                type="button"
                class="btn btn-primary m-2">Edit
            </a>

          @endif
      </p>
    </div>
  </section>

  <div class="row">

    <div class="col-md-8">

      @include('inc.carousel')

    </div>

    <div class="col-md-4">

      <h2 class="my-3">Price: <span class="text-danger">{{ $phone->price}} €</span> </h2>
      <hr>

      <p class="float-left mx-2">Storage size:</p>
      <p><b class="border border-success rounded-lg p-1">{{ $phone->storage_size}}GB</b></p>

      <p class="float-left mx-2">Screen size:</p>
      <p><b class="border border-primary rounded-lg p-1">{{ $phone->screen_size}} cm²</b></p>

      <p class="float-left mx-2">RAM size:</p>
      <p><b class="border border-dark rounded-lg p-1">{{ $phone->RAMsize}}GB RAM</b></p>

      <p class="float-left mx-2">Color:</p>
      <p><b class="border border-danger rounded-lg p-1">{{ $phone->color}}</b></p>

      @if(Auth::id() == $phone->user_id && Auth::check())
        <form class="pl-2" action="/phones/{{ $phone->id }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" name="button" class="btn btn-danger mt-5">Delete This Phone</button>
        </form>
      @endif

    </div>

    </div>


    </div>

  </div>



@endsection

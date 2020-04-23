@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h2 class="title">Latest Phones</h2>
    @if (count($phones))
    <div class="container">
      <div class="row">
        @foreach ($phones as $phone)
          <div class="col-md-4 p-5 text-center">
            <div class="card mb-2 border-gradient border-gradient-purple">
              <img class="card-img-top"
              src="/storage/phones/{{ $phone->cover_image }}"
              alt="{{ $phone->cover_image }}"
              />
              <div class="card-body">
                <h4 class="card-title">{{ $phone->model}}</h4>
                <h3 class="card-text">{{ $phone->brand}}</h3>
                <p class="card-text">€ {{ $phone->price}}</p>
                <a href="/phones/{{ $phone->id }}"><button class="btn btn-primary btn-sm btn-rounded" >Preview</button></a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    @else
      <p class="title" style="text-decoration: underline;" >No Phones found</p>
    @endif



@endsection

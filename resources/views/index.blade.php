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
          <div class="pricing-cards col-md-3">
            <div class="card-img card border-gradient border-gradient-card">
              <img src="https://fdn2.gsmarena.com/vv/bigpic/alcatel-3x-2019.jpg" alt="sample85" />
              <div class="color-phone card-body text-light">
                <h4>{{ $phone->model}}</h4>
                <h3>{{ $phone->brand}}</h3>
                <p>€ {{ $phone->price}}</p>
                <a href="/phones/{{ $phone->id }}"><button class="btn btn-lg btn-block bg-primary" type="button">Preview</button></a>
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

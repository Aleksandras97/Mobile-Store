@extends('layouts.app')

@section('content')

  <h2 class="title">Your Phones</h2>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @if (count($phones))
    <a href="/phones/create" class="btn btn-warning add-button"><i class="fas fa-plus"></i> Add Phone</a>
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
      <p class="title" style="text-decoration: underline;" >You dont have any phones yet 📱</p>
    @endif

@endsection

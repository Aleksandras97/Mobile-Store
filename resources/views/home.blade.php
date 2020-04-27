@extends('layouts.app')

@section('content')

  <section class="page-section background-padding">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <h2 class="masthead-heading text-center">Your Phones</h2>
      <a href="/phones/create" class="btn btn-warning add-button"><i class="fas fa-plus"></i> Add Phone</a>
      @if (count($phones))
          <div class="container">

              @include('inc.cards')

              @include('inc.links')
          </div>
      @else
        <p class="title" style="text-decoration: underline;" >You dont have any phones yet 📱</p>
      @endif

  </section>

@endsection

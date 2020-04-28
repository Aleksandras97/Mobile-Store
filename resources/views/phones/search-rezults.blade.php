@extends('layouts.app')

@section('content')

  <section class="page-section">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

      @if (count($phones))

        <h2 class="masthead-heading text-center">Results</h2>

        <div class="container">

            @include('inc.cards')

            @include('inc.links')

        </div>
      @else
        <p class="title" style="text-decoration: underline;" >Sorry we dont have anything with
          '{{ request()->input('query')}}' try putting real phone brands</p>
      @endif
  </section>
@endsection

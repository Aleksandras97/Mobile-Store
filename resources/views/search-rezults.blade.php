@extends('layouts.app')

@section('content')

  <section class="page-section">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <h2 class="masthead-heading text-center">Search results</h2>

      <div class="container">
        <p class="masthead-subheading text-center" >{{ $phones->total() }} result(s) for '{{ request()->input('query') }}'</p>

          @include('inc.cards')

          @include('inc.links')

      </div>
  </section>
@endsection

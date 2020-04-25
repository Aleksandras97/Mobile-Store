@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h2 class="title">Search results</h2>

    <div class="container">
      <p>{{ $phones->total() }} result(s) for '{{ request()->input('query') }}'</p>

        @include('inc.cards')

        @include('inc.links')

    </div>



@endsection

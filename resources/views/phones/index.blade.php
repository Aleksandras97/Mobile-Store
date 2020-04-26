@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    @include('inc.PhoneGrid')
    {{-- <h2 class="title">Latest Phones</h2>
    @if (count($phones)) --}}
    {{-- <div class="container">

        @include('inc.cards')

        @include('inc.links')

    </div> --}}

    {{-- @else
      <p class="title" style="text-decoration: underline;" >No Phones found</p>
    @endif --}}



@endsection

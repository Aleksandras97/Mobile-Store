@extends('layouts.app')

@section('content')

<div class="container background">
  <h1>{{ $phone->brand }} <b>{{ $phone->model }}</b></h1>
  <a href="/home"><button type="button" name="button" class="btn btn-success m-2">Go back</button></a>
  <a href="/phones/{{ $phone->id }}/edit"><button type="button" name="button" class="btn btn-info m-2">Edit</button></a>
  <div class="row">
    <div class="col-md-5">
      <table class="table table-sm table-striped table-hover">
      <tbody>
        <tr>
          <th scope="row text-right">Brand</th>
          <td>{{ $phone->brand}}</td>
        </tr>
        <tr>
          <th scope="row">Model</th>
          <td>{{ $phone->model}}</td>
        </tr>
        <tr>
          <th scope="row">Screen Size</th>
          <td>{{ $phone->screen_size}}</td>
        </tr>
        <tr>
          <th scope="row">RAM Size</th>
          <td>{{ $phone->RAMsize}}</td>
        </tr>
        <tr>
          <th scope="row">Storage Size</th>
          <td>{{ $phone->storage_size}}</td>

        </tr>
        <tr>
          <th scope="row">Color</th>
          <td>{{ $phone->color}}</td>
        </tr>
        <tr>
          <th scope="row">Price</th>
          <td>{{ $phone->price}}</td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="col-md-7">

    </div>
  </div>


@endsection

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      loop category
      <div class="col-md-12">
        <h2>category name</h2>
        <div class="jumbotron">
          <div class="row">
            loop food 
            <div class="col-md-3">
              <img src="" width="200" height="155">
              <p class="text-center">food name
                <span>$</span>
              </p>
              <p class="text-center">
                <a href="">view</a>
              </p>
            </div>
            endloop
          </div>
        </div>
      </div>
      endloop
    </div>
  </div>
@endsection
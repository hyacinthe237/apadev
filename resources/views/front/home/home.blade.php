@extends('front.templates.default')

@section('head')
    <title>Accueil</title>
@endsection()

@section('body')
  <div class="page-white">
      <div class="_carousel">
          @include('front.home.carousel')
      </div>

      @include('front.pages.services')
  </div>
@endsection()

@section('js')
      @include('front.includes.carousel-js')
@endsection()

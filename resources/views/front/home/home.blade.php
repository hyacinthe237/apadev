@extends('front.templates.default')

@section('head')
    <title>Accueil</title>
@endsection()

@section('body')
  <div class="page-white">
      <div class="_carousel">
          @include('front.home.carousel')
      </div>

      <div class="row mbr-justify-content-center">
          <div class="col-lg-4 mbr-col-md-10">
              <div class="wrap">
                  <div class="ico-wrap">
                      <span class="mbr-iconfont ion-android-globe"></span>
                  </div>
                  <div class="text-wrap vcenter">
                      <h4 class="bold">Stay <span>Successful</span></h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mbr-col-md-10">
              <div class="wrap">
                  <div class="ico-wrap">
                      <span class="mbr-iconfont ion-aperture"></span>
                  </div>
                  <div class="text-wrap vcenter">
                      <h4 class="bold">Create <span>An Effective Team</span></h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mbr-col-md-10">
              <div class="wrap">
                  <div class="ico-wrap">
                      <span class="mbr-iconfont ion-laptop"></span>
                  </div>
                  <div class="text-wrap vcenter">
                      <h4 class="bold">Launch <span>A Unique Project</span></h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                  </div>
              </div>
          </div>
      </div>

      <div class="row">
          @if (sizeOf($references))
              @foreach ($references as $item)
                  <div class="col-sm-6">
                      <div class="wrap">
                          <div class="ico-wrap">
                              <span class="mbr-iconfont ion-android-globe"></span>
                          </div>
                          <div class="text-wrap vcenter">
                              <h4 class="bold">{{ $item->title }}</h4>
                              <p></p>
                          </div>
                      </div>
                  </div>
              @endforeach
          @endif
      </div>

  </div>
@endsection()

@section('js')
      @include('front.includes.carousel-js')
@endsection()

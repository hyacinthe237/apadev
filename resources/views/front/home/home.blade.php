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
          <div class="references">
              @if (sizeOf($references))
                  @foreach ($references as $item)
                      <div class="col-sm-6">
                          <div class="reference text-center">
                              <div class="_title bold">
                                  {{ $item->title }}
                              </div>
                              <ul class="list-inline">
                                  <li class="list-inline-item">{{ $item->location }}</li>
                                  <li class="list-inline-item">{{ $item->year }}</li>
                                  <li class="list-inline-item">{{ $item->commanditaires }}</li>
                              </ul>
                          </div>
                      </div>
                  @endforeach
              @endif
          </div>
      </div>
      <div class="mt-60"></div>

  </div>
@endsection()

@section('js')
      @include('front.includes.carousel-js')
@endsection()

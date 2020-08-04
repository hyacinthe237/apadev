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
  </div>

  <section class="">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="mb-40">Nos références</h2>
      </div>
      <div class="references">
            @if (sizeOf($references))
              @foreach ($references as $reference)
                <div class="col-sm-4">
                  <div class="panel references">
                      <div class="panel-heading">
                          <div class="reference">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <div class="ribbon"><span>{{ $reference->year ? $reference->year : $reference->description }}</span></div>
                                  </div>
                                  <div class="col-sm-12">
                                      <h5 class="pull-left">{{ $reference->title }}</h5>
                                  </div>
                                  <div class="col-sm-12">
                                      {{ $reference->commanditaires }}
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              @endforeach
            @endif
        </div>
    </div>
  </section>
@endsection()

@section('js')
      @include('front.includes.carousel-js')
@endsection()


@extends('front.templates.default')

@section('head')
    <title>Nos Références</title>
@endsection()

@section('body')
  <section class="mt-40">
    <div class="container">
      <div class="row">
        @foreach ($references as $reference)
          <div class="col-sm-6">
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
      </div>
    </div>
  </section>
@endsection()

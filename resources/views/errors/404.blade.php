@extends('front.templates.default')

@section('head')
<title>404 | {{ config('app.name') }}</title>
@endsection


@section('body')
<section class="container">
    <div class="mt-100 pb-80 text-center">
        <h1> 404</h1>

        <h2 class="mt-10">
            {{-- {{ $exception->getMessage() ?: 'Page not found' }} --}}
            Page not found
        </h2>

        <div class="mt-40">
            <a href="/booking" class="btn btn-lg btn-rentals elevated bold">GET STARTED</a>
        </div>
    </div>
</section>

@endsection

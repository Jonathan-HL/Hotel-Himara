@extends('layouts.app')

@section('content')
@include('layouts.flash')

<section id="content-types">
    <div class="row">
        @foreach ($carouselAll as $item)
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="{{ asset('/storage/'. $item->url) }}" alt="Card image cap" style="height: 20rem">
                    <div class="card-body">
                        <p class="card-text">
                           {{ $item->url}}
                        </p>
                        <a href="{{route('carousel.edit', $item->id)}}" class="btn btn-warning m-1">Edit</a>

                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</section>

@endsection

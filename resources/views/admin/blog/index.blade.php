@extends('layouts.app')

@section('content')
@include('layouts.flash')

<div class="d-flex m-2">

    <h1>Partie Admin Blog</h1>
        <a class="btn btn-primary m-auto" href="{{ route("blogs.create") }}">create</a>
</div>


@foreach ($blog as $item)


<div class="col-md-7 col-sm-12">
    <div class="card">

        <div class="card-content">
            <img class="card-img-top img-fluid" src="{{ asset('/storage/images/'. $item->img) }}" alt="Card image cap" style="height: 20rem">
            <div class="card-body">
                <h4 class="card-title">titre : {{ $item->title }}</h4>
                <p class="card-text">
                   {{-- description : {{$item->description}} --}}
                   <p>description : {{ Str::limit($item->description, 150) }}</p>

                </p>
                <p class="card-text">
                   auteur : {{$item->auteur}}
                </p>
                <p>
                    date de creation : {{ $item->creation }}
                </p>
                <p>
                    {{ $item->categorie_article->nom  }}
                </p>

                <p>
                    @foreach ($item->tags as $tag)
                    @if ($loop->last)

                    <span>
                    {{ $tag->nom  }}
                    </span>
                    @else
                    <span>
                        {{ $tag->nom  }} -
                    </span>
                    @endif

                    @endforeach
                </p>
                <div class="d-flex">
                    <form action="{{ route('blogs.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger block m-1">Delete</button>
                    </form>
                    <a href="{{route('blogs.edit', $item->id)}}" class="btn btn-warning m-1">Edit</a>
                </div>
                {{-- <button class="btn btn-primary block">Update now</button> --}}


            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

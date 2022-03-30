@extends('layouts.app')

@section('content')
@include('layouts.flash')

@if (count($room) <= 32)
<div class="d-flex m-2">
    <h1>Partie Admin Room</h1>
        <a class="btn btn-primary m-auto" href="{{ route("rooms.create") }}">create</a>
</div>

@endif

@foreach ($room as $item)

<div class="col-md-7 col-sm-12">
    <div class="card">

        <div class="card-content">
            <img class="card-img-top img-fluid" src="{{ asset('/storage/images/'. $item->img) }}" alt="Card image cap" style="height: 20rem">
            <div class="card-body">
                <h4 class="card-title">titre : {{ $item->titre }}</h4>
                <p class="card-text">
                   {{-- description : {{$item->description}} --}}
                   <p>description : {{ Str::limit($item->description, 150) }}</p>

                </p>
                <p class="card-text">
                   prix : {{$item->prix}}
                </p>
                <p>
                    nombre de lit  : {{ $item->litMax }}
                </p>
                <p>
                    nombre de personne  : {{ $item->personMax }}
                </p>
                <p>
                    {{ $item->category_room->nom  }}
                </p>

                <p>
                    @foreach ($item->tag_Rooms as $tag)
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
                    <form action="{{ route('rooms.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger block m-1">Delete</button>
                    </form>
                    <a href="{{route('rooms.edit', $item->id)}}" class="btn btn-warning m-1">Edit</a>
                </div>


            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

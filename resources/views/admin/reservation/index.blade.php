@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">reservation</h4>
                {{-- <a class="btn btn-primary m-auto" href="{{ route("categoryImage.create") }}">create</a> --}}

            </div>

            <div class="card-content">

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>COUNTRY</th>
                                <th>TELEPHONE</th>
                                <th>WEBSITE</th>
                                <th>COMMENTAIRE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservation as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->id }}</td>
                                    <td class="text-bold-500">{{ $item->nom }}</td>
                                    <td class="text-bold-500">{{ $item->email }}</td>
                                    <td class="text-bold-500">
                                        @if ($item->country == '')
                                            /
                                        @else
                                            {{ $item->country }}
                                        @endif
                                    </td>
                                    <td class="text-bold-500">
                                        @if ($item->telephone == '')
                                            /
                                        @else
                                        {{ $item->telephone }}

                                        @endif
                                    </td>
                                    <td class="text-bold-500">
                                        @if ($item->website == '')
                                            /
                                        @else
                                            {{ $item->website }}
                                        @endif
                                    </td>
                                    <td class="text-bold-500">
                                        @if ($item->commentaire)
                                            {{ Str::limit($item->commentaire, 15) }}
                                        @else
                                            /
                                        @endif
                                    </td>


                                    <td class="text-bold-500 d-flex">
                                        @if (!$item->valide)
                                            <a href="{{ route('reservation.update', $item->id) }}"
                                                class="btn btn-primary m-1">VALIDATE</a>
                                        @endif

                                        {{-- <a href="{{route('categories.edit', $item->id)}}" class="btn btn-warning m-1">Edit</a> --}}

                                        {{-- <form action="{{ route('comment.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-1">Delete</button>
                                        </form> --}}

                                    </td>

                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection

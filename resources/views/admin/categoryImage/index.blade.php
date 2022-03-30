@extends('layouts.app')

@section('content')
@include('layouts.flash')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Category Image</h4>
            <a class="btn btn-primary m-auto" href="{{ route("categoryImage.create") }}">create</a>

        </div>

        <div class="card-content">

            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categoryImageAll as $item)
                        <tr>
                            <td class="text-bold-500">{{ $item->id }}</td>
                            <td class="text-bold-500">{{ $item->nom }}</td>

                            <td class="text-bold-500 d-flex">
                                <a href="{{route('categories.edit', $item->id)}}" class="btn btn-warning m-1">Edit</a>

                                <form action="{{ route("categoryImage.destroy", $item->id) }}" method="POST">
                                    @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-1">Delete</button>
                                </form>

                            </td>

                            <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

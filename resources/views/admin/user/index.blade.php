@extends('layouts.app')

@section('content')
@include('layouts.flash')


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">user</h4>
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
                            <th>ROLE</th>
                            <th>Profil Photo</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userAll as $item)
                        <tr>
                            <td class="text-bold-500">{{ $item->id }}</td>
                            <td class="text-bold-500">{{ $item->name }}</td>
                            <td class="text-bold-500">{{ $item->email }}</td>
                            <td class="text-bold-500">{{ $item->role->name }}</td>
                            <td class="text-bold-500"><img style="height: 200px; width: 200px; border-radius: 50%;" src="{{ asset("storage/".$item->profil) }}" alt=""></td>

                            <td class="text-bold-500 d-flex">
                                <a href="{{route('user.edit', $item->id)}}" class="btn btn-warning m-1">Edit</a>

                                {{-- <form action="{{ route("user.destroy", $item->id) }}" method="POST">
                                    @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-1">Delete</button>
                                </form> --}}

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

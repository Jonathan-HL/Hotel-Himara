@extends('layouts.app')

@section('content')
@include('layouts.flash')


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">videos</h4>
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
                        <tr>
                            <td class="text-bold-500">{{ $video->id }}</td>
                            <td class="text-bold-500">{{ $video->url }}</td>

                            <td class="text-bold-500 d-flex">
                                <a href="{{route('video.edit', $video->id)}}" class="btn btn-warning m-1">Edit</a>
                            </td>

                            <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

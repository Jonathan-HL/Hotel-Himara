@extends('layouts.app')

@section('content')
@include('layouts.flash')

<h1>Partie Admin Contact</h1>

<div class="col-12">
    <div class="card">
        {{-- <div class="card-header">
            <h4 class="card-title">Hoverable rows</h4>
        </div> --}}
        <div class="card-content">
            {{-- <div class="card-body">
                <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover
                    state on table
                    rows
                    within a
                    <code class="highlighter-rouge">&lt;tbody&gt;</code>.
                </p>
            </div> --}}
            <!-- table hover -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ADDRESSE</th>
                            <th>EMAIL</th>
                            <th>TELEPHONE</th>
                            <th>FAX</th>
                            <th>MESSAGE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-bold-500">{{ $info->adresse }}</td>
                            <td>{{ $info->mail }}</td>
                            <td class="text-bold-500">{{ $info->telephone }}</td>
                            <td>{{ $info->fax }}</td>
                            <td>{{ $info->site }}</td>
                            <td>
                                {{-- <a href="#"> --}}
                                <a href="{{route('contacts.edit', $info->id)}}" class="btn btn-warning m-1">Edit</a>
                                {{-- <i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a> --}}
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

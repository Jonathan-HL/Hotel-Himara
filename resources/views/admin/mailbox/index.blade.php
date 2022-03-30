@extends('layouts.app')

@section('content')
    <h1>mail box</h1>

    <div class="col-12">
        @if (\Request::route()->getName() != 'mailbox.archive')
            <a href="{{ route('mailbox.archive') }}" class="btn btn-danger">Archives</a>
        @else
            <a href="{{ route('mailbox.index') }}" class="btn btn-primary">Mailbox</a>
        @endif
        <div class="card">

            <div class="card-content">

                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>FULL NAME</th>
                                <th>EMAIL</th>
                                <th>TELEPHONE</th>
                                <th>SUBJECT</th>
                                <th>MESSAGE</th>
                                @if(\Request::route()->getName() != 'mailbox.archive')
                                <th>ACTION</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td class="text-bold-500">{{ $contact->fullname }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td class="text-bold-500">{{ $contact->phone }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->message }}</td>

                                    <td>
                                        @if (!$contact->deleted_at)
                                        <a href="{{ route('mailbox.destroy', $contact->id) }}"
                                        class="btn btn-warning m-1">Archive</a>
                                        @else
                                        <a href="{{ route('mailbox.restore', $contact->id) }}"
                                            class="btn btn-info m-1">Restore</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

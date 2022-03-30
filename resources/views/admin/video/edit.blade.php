@extends('layouts.app')

@section('content')
@include('layouts.flash')


{{-- <h1>test</h1> --}}

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gallery</h4>
                </div>

            <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{ route('video.update',$video->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">lien de la video</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de la video" name="url" value="{{ old('url',$video->url) }}">
                                        @error('url')
                                        @include('layouts.error')
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

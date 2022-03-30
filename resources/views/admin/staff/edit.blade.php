@extends('layouts.app')

@section('content')
@include('layouts.flash')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Team</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('teams.update', $teams->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    {{-- <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Ton image</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="ton url.." name="img" value="{{ old('img',$teams->img) }}">
                                    </div>
                                </div> --}}

                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <!-- File uploader with validation -->
                                                <div class="filepond--root with-validation-filepond filepond--hopper"
                                                    data-style-button-remove-item-position="left"
                                                    data-style-button-process-item-position="right"
                                                    data-style-load-indicator-position="right"
                                                    data-style-progress-indicator-position="right"
                                                    data-style-button-remove-item-align="false" style="height: 76px;">
                                                    <input class="filepond--browser" type="file"
                                                        id="filepond--browser-7d64d55se" name="img"
                                                        aria-controls="filepond--assistant-7d64d55se"
                                                        aria-labelledby="filepond--drop-label-7d64d55se" accept="image/png"
                                                        multiple="" value="{{ old('img', $teams->img) }}">
                                                    <div class="filepond--drop-label"
                                                        style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                        <label for="filepond--browser-7d64d55se"
                                                            id="filepond--drop-label-7d64d55se" aria-hidden="true"><br> Drag
                                                            &amp; Drop your files or
                                                            <span class="filepond--label-action" tabindex="0">Browse</span>
                                                        </label>
                                                    </div>
                                                    <div class="filepond--list-scroller"
                                                        style="transform: translate3d(0px, 60px, 0px);">
                                                        <ul class="filepond--list" role="list"></ul>
                                                    </div>
                                                    <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                                        <div class="filepond--panel-top filepond--panel-root"></div>
                                                        <div class="filepond--panel-center filepond--panel-root"
                                                            style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);">
                                                        </div>
                                                        <div class="filepond--panel-bottom filepond--panel-root"
                                                            style="transform: translate3d(0px, 68px, 0px);"></div>
                                                    </div><span class="filepond--assistant"
                                                        id="filepond--assistant-7d64d55se" role="status" aria-live="polite"
                                                        aria-relevant="additions"></span>
                                                    <div class="filepond--drip"></div>
                                                    <fieldset class="filepond--data"></fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            {{-- <label for="first-name-column">{{ $teams->description }}</label> --}}
                                            <label for="first-name-column">Description</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                placeholder="description" name="description"
                                                value="{{ old('description', $teams->description) }}">
                                                @error('description')
                                                @include('layouts.error')
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            {{-- <label for="first-name-column">{{ $teams->fullname }}</label> --}}
                                            <label for="first-name-column">Full name</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                placeholder="Nom de l'image" name="fullname"
                                                value="{{ old('fullname', $teams->fullname) }}">
                                                @error('fullname')
                                            @include('layouts.error')
                                            @enderror
                                        </div>
                                    </div>

                                    @if ($teams->fonction_id != 1)
                                        <div class="col-md-12 col-12">


                                            <h6>Select your category please</h6>
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="inputGroupSelect01" name="fonction_id">
                                                    <option selected="">Choose category...</option>
                                                    @foreach ($fonctionAll as $item)
                                                        <option value="{{ $item->id }}">{{ $item->fonction }}</option>
                                                    @endforeach

                                                </select>
                                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                            </div>
                                        </div>
                                    @endif


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

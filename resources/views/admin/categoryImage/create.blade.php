@extends('layouts.app')

@section('content')
@include('layouts.flash')

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gallery</h4>
                </div>

                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{ route('categoryImage.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nom</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'image" name="nom" value="{{ old('nom') }}">
                                            @error('nom')
                                            @include('layouts.error')
                                            @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Filter</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'image" name="filter" value="{{ old('filter') }}">
                                            @error('filter')
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

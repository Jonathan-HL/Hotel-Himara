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
                        <form class="form" action="{{ route('categories.update',$categories->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        {{-- <label for="first-name-column">{{ $categories->nom }}</label> --}}
                                        <label for="first-name-column">Nom</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'image" name="nom" value="{{ old('nom',$categories->nom) }}">
                                            @error('nom')
                                            @include('layouts.error')
                                            @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        {{-- <label for="first-name-column">{{ $categories->filter }}</label> --}}
                                        <label for="first-name-column">filter</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'image" name="filter" value="{{ old('filter',$categories->filter) }}">
                                            @error('filter')
                                            @include('layouts.error')
                                            @enderror
                                    </div>
                                    {{-- <div class="input-group mb-3">
                                        <select class="form-select" id="inputGroupSelect01" name="categorie_image_id">
                                            <option selected="">Choose category...</option>
                                            @foreach ($filters as $item)
                                                <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                            @endforeach

                                        </select>

                                    </div> --}}
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

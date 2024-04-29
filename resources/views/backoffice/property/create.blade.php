@extends('base')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-10 mx-auto text-center">
                <h1>Création d'un nouveau bien</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8 mx-auto">
                <form class="row g-3" action="{{ url('/backoffice/property/form') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8">
                        <label for="Title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="Title" name="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="aera" class="form-label">Superficie</label>
                        <input type="number" class="form-control" id="aera" name="aera"
                            value="{{ old('aera') }}">
                        @error('aera')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4"><label for="imageInput1" class="form-label">Votre image</label>
                        <input name="image1" type="file" class="form-control" id="imageInput1"
                            placeholder="Choisisser une image">
                        @error('image1')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4"><label for="imageInput2" class="form-label">Votre image</label>
                        <input name="image2" type="file" class="form-control" id="imageInput2"
                            placeholder="Choisisser une image">
                        @error('image2')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4"><label for="imageInput3" class="form-label">Votre image</label>
                        <input name="image3" type="file" class="form-control" id="imageInput3"
                            placeholder="Choisisser une image">
                        @error('image3')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="floors" class="form-label">Séléctionner le nombre d'étage</label>
                        <select class="form-select" id="floors" aria-label="Séléctionner le nombre d'étage"
                            name="floors">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6 et +">6 et +</option>
                        </select>
                        @error('floors')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="rooms" class="form-label">Séléctionner le nombre de pièces</label>
                        <select class="form-select" id="rooms" aria-label="Séléctionner le nombre de pièces"
                            name="rooms">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6 et +">6 et +</option>
                        </select>
                        @error('rooms')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="sleeping-rooms" class="form-label">Séléctionner le nombre de chambres</label>
                        <select class="form-select" id="sleeping-rooms" aria-label="Séléctionner le nombre de chambres"
                            name="sleeping-rooms">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6 et +">6 et +</option>
                        </select>
                        @error('sleeping-rooms')
                            <p class="fs-6 text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="specificities" class="form-label">Séléctionner les spécificités</label>
                        <select class="form-select" id="specificities" aria-label="Séléctionner les spécificités"
                            name="specificities[]" multiple>
                            @foreach ($specificities as $specificity)
                                <option value="{{ $specificity->id }}">{{ $specificity->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="heating" class="form-label">Séléctionner le mode de chauffages</label>
                        <select class="form-select" id="heating" aria-label="Séléctionner le mode de chauffages"
                            name="heating">
                            <option>Séléctionner le mode de chauffages</option>
                            @foreach ($heatings as $heating)
                                <option value="{{ $heating->id }}">{{ $heating->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('base')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($property[0]->images as $image)
                            @if ($loop->first)
                                <div class="carousel-item  active">
                                @else
                                    <div class="carousel-item">
                            @endif

                            <img class="d-block w-100" src="http://localhost:8000/storage/{{ $image->imageUrl }}"
                                alt="First slide">
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a> --}}
        </div>

        <div class="col-md-4">
            <h3 class="text-primary fw-bold">{{ $property[0]->title }}</h3>
            <h4>{{ $property[0]->rooms }} pièces - {{ $property[0]->aera }} m²</h4>
            <h2 class="text-primary fw-bold">{{ $property[0]->price }} €</h2>
            <hr>
            <h4>Interessé par ce bien ?</h4>

            <form>
                <div class="row mb-3">
                    <div class="col">
                        <label for="lastName" class="form-label fs-6">Prénom</label>
                        <input type="text" class="form-control" id="lastName" aria-describedby="lastName"
                            name="lastName">
                        <div id="lastName" class="form-text">Rentrer votre prénom.</div>
                    </div>
                    <div class="col">
                        <label for="firstName" class="form-label fs-6">Nom</label>
                        <input type="text" class="form-control" id="firstName" aria-describedby="firstName"
                            name="firstName">
                        <div id="firstName" class="form-text">Rentrer votre nom.</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="phone" class="form-label fs-6">Téléphone</label>
                        <input type="tel" class="form-control" id="phone" aria-describedby="phone" name="phone">
                        <div id="phone" class="form-text">Rentrer votre numéro de téléphone.</div>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label fs-6">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
                        <div id="email" class="form-text">Rentrer votre email.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label fs-6">Votre message :</label>
                    <textarea class="form-control" name="message" id="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <p>{{ $property[0]->description }}</p>

        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <h4>Caractéristiques</h4>
            <table class="table table-striped">

                <tbody>
                    <tr>
                        <th>Surface habitable</th>
                        <td>{{ $property[0]->aera }}</td>
                    </tr>
                    <tr>
                        <th>Pièces</th>
                        <td>{{ $property[0]->rooms }}</td>
                    </tr>
                    <tr>
                        <th>Chambres</th>
                        <td>{{ $property[0]->sleeping_rooms }}</td>
                    </tr>
                    <tr>
                        <th>Etage</th>
                        <td>{{ $property[0]->floors }}</td>
                    </tr>
                    <tr>
                        <th>Chauffage</th>
                        <td>{{ $property[0]->heating[0]->type }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h4>Spécificités</h4>
            <table class="table table-bordered">
                <tbody>
                    @foreach ($property[0]->specificities as $specificitie)
                        <tr>
                            <td>{{ $specificitie->name }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
    </div>


    {{-- @dump($property[0]) --}}
@endsection()

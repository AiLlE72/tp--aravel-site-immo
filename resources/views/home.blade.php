@extends('base')


@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 mx-auto text-center">
                <h1>Bienvenue sur KalistImmo</h1>
                <p class="fs-3">Découvrez nos dernières propriétés en vente.</p>
            </div>
        </div>
        <div class="row mt-3">
            @foreach ($properties as $property)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        @foreach ($property->images as $index => $image)
                            @if ($loop->first)
                                <img src="http://localhost:8000/storage/{{ $image->imageUrl }}" class="card-img-top"
                                    alt="Photo d'illustration">
                            @endif
                        @endforeach
                        <div class="card-body">
                            <a href="{{ route('singleProperty', ['property' => $property->id]) }}">
                                <h4 class="card-title">{{ $property->title }}</h4>
                            </a>
                            <p class="card-text text-truncate">{{ $property->description }}</p>
                            <h5>{{ $property->price }} €</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

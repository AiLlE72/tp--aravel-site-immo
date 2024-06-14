@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-4">
                <h1>liste des biens en vente</h1>
            </div>
        </div>

        {{-- filter --}}
        <div class="row">
            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ url('/property/search') }}" method="POST">
                @csrf
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input type="number" step="10" class="form-control" placeholder="Superficie minimum"
                            aria-label="Recipient's username" aria-describedby="button-addon2" name="minAera">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Nombre de pièce"
                            aria-label="Recipient's username" aria-describedby="button-addon2" name="rooms">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input type="number" step="1000" class="form-control" placeholder="Budget mini"
                            aria-label="Recipient's username" aria-describedby="button-addon2" name="minPrice">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Mot clé" aria-label="Recipient's username"
                            aria-describedby="button-addon2" name="keyword">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Recherche</button>
                    </div>
                </div>
            </form>
        </div>



        {{-- alert --}}
        @if (session('success'))
            @include('partials.alert')
        @endif

        {{-- index card --}}
        <div class="row mt-3">
            @foreach ($properties as $property)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        @foreach ($property->images as $index => $image)
                            @if ($loop->first)
                                <img src="http://localhost:8000/storage/{{ $image->imageUrl }}" class="card-img-top"
                                    alt="Photo d'illustration">
                            @endif
                        @endforeach
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row mt-3">
            {{ $properties->links() }}
        </div>
    </div>
@endsection

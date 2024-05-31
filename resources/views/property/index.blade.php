@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-4">
                <h1>liste des biens en vente</h1>
            </div>
        </div>

        @if (session('success'))
            @include('partials.alert')
        @endif
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

        <div class="row mt-3">
            {{$properties->links()}}
        </div>
    </div>
@endsection

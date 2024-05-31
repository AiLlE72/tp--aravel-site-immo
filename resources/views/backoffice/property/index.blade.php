@extends('base')


@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-10 mx-auto text-center">
                <h1>Gestion des biens</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-10 mx-auto">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Description</th>
                            <th scope="col">Superficie</th>
                            <th scope="col">nombre d'étage</th>
                            <th scope="col">Nombre de pièce</th>
                            <th scope="col">Nombre de chambre</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($properties as $property)
                            <tr>
                                <th scope="row">{{ $property->id }}</th>
                                <td>{{ $property->title }}</td>
                                <td class="text-truncate" style="max-width: 150px;">{{ $property->description }}</td>
                                <td>{{ $property->aera }}</td>
                                <td>{{ $property->floors }}</td>
                                <td>{{ $property->rooms }}</td>
                                <td>{{ $property->{'sleeping-rooms'} }}</td>
                                <td><a href="{{ route('properties-edit', [$property->id]) }}" type="button" class="btn btn-secondary">
                                        Modifier
                                </a></td>
                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $property->id }}">
                                        Supprimer
                                    </button></td>
                            </tr>

                            <!-- Modal  modifier-->
                            <div class="modal fade" id="updateModal{{ $property->id }}" tabindex="-1"
                                aria-labelledby="updateModal{{ $property->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="updateModal{{ $property->id }}Label">Modifier
                                                un mode de chauffage</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="{{ url('/backoffice/property/update', ['property' => $property->id]) }}"
                                                method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="Type de chauffage" aria-label="Type de chauffage"
                                                            aria-describedby="bouton d'ajout" name="type"
                                                            value="{{ $property->type }}">
                                                        <button class="btn btn-outline-secondary" type="submit"
                                                            id="bouton d'ajout">Modifier</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal  supprimer-->
                            <div class="modal fade" id="deleteModal{{ $property->id }}" tabindex="-1"
                                aria-labelledby="deleteModal{{ $property->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('/backoffice/property/delete', ['property' => $property->id]) }}"
                                            method="post">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModal{{ $property->id }}Label">
                                                    Supprimer un bien</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3">
                                                        <p>Etes vous sur de vouloir supprimer {{ $property->title }}</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Supprimer définitivement</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-md-8 mx-auto">
                {{ $properties->links() }}
            </div>
        </div>

    </div>
@endsection

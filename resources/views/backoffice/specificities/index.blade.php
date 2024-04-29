@extends('base')


@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-10 mx-auto text-center">
                <h1>Gestion des Spécificités</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 mx-auto ">
                <form action="{{ url('/backoffice/specificities/create') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nouvelle spécificité"
                                aria-label="Nouvelle spécificité" aria-describedby="bouton d'ajout" name="name">
                            <button class="btn btn-outline-secondary" type="submit" id="bouton d'ajout">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8 mx-auto">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nom de la spécificité</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($specificities as $specificity)
                            <tr>
                                <th scope="row">{{ $specificity->id }}</th>
                                <td>{{ $specificity->name }}</td>
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#updateModal{{ $specificity->id }}">
                                        Modifier
                                    </button></td>
                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $specificity->id }}">
                                        Supprimer
                                    </button></td>
                            </tr>

                            <!-- Modal  modifier-->
                            <div class="modal fade" id="updateModal{{ $specificity->id }}" tabindex="-1"
                                aria-labelledby="updateModal{{ $specificity->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="updateModal{{ $specificity->id }}Label">Modifier
                                                une spécificitié</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="{{ url('/backoffice/specificities/update', ['specificities' => $specificity->id]) }}"
                                                method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="Nouvelle spécificité" aria-label="Nouvelle spécificité"
                                                            aria-describedby="bouton d'ajout" name="name"
                                                            value="{{ $specificity->name }}">
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
                            <div class="modal fade" id="deleteModal{{ $specificity->id }}" tabindex="-1"
                                aria-labelledby="deleteModal{{ $specificity->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('/backoffice/specificities/delete', ['specificities' => $specificity->id]) }}"
                                            method="post">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModal{{ $specificity->id }}Label">
                                                    Supprimer une spécificité</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3">
                                                        <p>Etes vous sur de vouloir supprimer {{ $specificity->name }}</p>
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
                {{ $specificities->links() }}
            </div>
        </div>

    </div>
@endsection

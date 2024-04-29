@extends('base')


@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-10 mx-auto text-center">
                <h1>Gestion des modes de chauffage</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 mx-auto ">
                <form action="{{ url('/backoffice/heating/create') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type de chauffage"
                                aria-label="Type de chauffage" aria-describedby="bouton d'ajout" name="type">
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
                            <th scope="col">type de Chauffage</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($heatings as $heating)
                            <tr>
                                <th scope="row">{{ $heating->id }}</th>
                                <td>{{ $heating->type }}</td>
                                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#updateModal{{ $heating->id }}">
                                        Modifier
                                    </button></td>
                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $heating->id }}">
                                        Supprimer
                                    </button></td>
                            </tr>

                            <!-- Modal  modifier-->
                            <div class="modal fade" id="updateModal{{ $heating->id }}" tabindex="-1"
                                aria-labelledby="updateModal{{ $heating->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="updateModal{{ $heating->id }}Label">Modifier
                                                un mode de chauffage</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="{{ url('/backoffice/heating/update', ['heating' => $heating->id]) }}"
                                                method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="Type de chauffage" aria-label="Type de chauffage"
                                                            aria-describedby="bouton d'ajout" name="type"
                                                            value="{{ $heating->type }}">
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
                            <div class="modal fade" id="deleteModal{{ $heating->id }}" tabindex="-1"
                                aria-labelledby="deleteModal{{ $heating->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('/backoffice/heating/delete', ['heating' => $heating->id]) }}"
                                            method="post">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModal{{ $heating->id }}Label">
                                                    Supprimer un mode de chauffage</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                @csrf
                                                <div class="mb-3">
                                                    <div class="input-group mb-3">
                                                        <p>Etes vous sur de vouloir supprimer {{ $heating->type }}</p>
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
                {{ $heatings->links() }}
            </div>
        </div>

    </div>
@endsection

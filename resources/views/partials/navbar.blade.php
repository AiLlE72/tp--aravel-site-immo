<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="http://localhost:8000/storage/logo/logo.png" style="width:80px"alt="logo de l'entreprise KalistImmo" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a @class([
                        'nav-link',
                        // 'active' => request()->route()->getName() === 'home',
                    ]) href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a  @class([
                        'nav-link',
                        'active' => request()->route()->getName() === 'properties-index',
                    ]) href="{{ route('properties-index') }}">Tout nos biens</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Administration
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('properties-form') }}">Création de bien</a></li>
                        <li><a class="dropdown-item" href="{{ route('backoffice-properties-index') }}">Modification de bien</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('specificities-index') }}">Gestion de spécificités</a></li>
                        <li><a class="dropdown-item" href="{{ route('heating-index') }}">Gestion des modes de chauffages</a></li>
                    </ul>
                </li>
                @auth
                    <li class="nav-item">
                        <p class="nav-link">Bonjour {{ Auth::user()->name }}</p>
                    </li>

                    <form class="nav-item"action="{{ route('auth.logout') }}" method="post">@csrf<button class="nav-link"
                            type="submit">Se deconnecter</button></form>

                @endauth
                @guest
                    <li class="nav-item">
                        <a @class([
                            'nav-link',
                            'active' => request()->route()->getName() === '',
                        ]) href="/login">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a @class([
                            'nav-link',
                            'active' => request()->route()->getName() === '',
                        ]) href="/register">Créer un compte</a>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>

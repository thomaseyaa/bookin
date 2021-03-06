<!-- HEADER-->
<div class="bg-light">
    <nav class="py-3 navbar navbar-expand-lg fixed-top auto-hiding-navbar navbar-light">
        <div class="container">
            <a class="navbar-brand py-0" href="/">
                <h1 class="text-dark">Book<span class="text-primary">in</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <form method="post" action='/searchNews' class="form-inline my-2 my-lg-0 ml-auto" type="submit">
                    @csrf
                    <input class="form-control rounded-pill bg-white" type="search" name="searchBar" placeholder="Recherche" aria-label="Recherche">
                </form>
                <ul class="navbar-nav">
                    @if(session('user') != null && session('user')->is_admin == 0)
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/profile">Profil</a></li>
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/news">Actualités</a></li>
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/contact">Contact</a></li>
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/logout">Déconnexion</a></li>
                   @elseif(session('user') != null && session('user')->is_admin == 1)
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/admin">Tableau de bord</a></li>
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/news">Actualités</a></li>
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/logout">Déconnexion</a></li>
                    @else
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/home">Accueil</a></li>
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/news">Actualités</a></li>
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/contact">Contact</a></li>
                        <li class="nav-item mx-1"><a class="nav-link text-dark" href="/auth">Connexion/Inscription</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

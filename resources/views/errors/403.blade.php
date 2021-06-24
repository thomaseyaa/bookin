@extends('layout.default')

@section('content')
    <!-- 404-->
    <div class="container mt-6 pb-15">
        <div class="row">
            <div class="col text-center pt-8 pb-6">
                <h1 class="display-3 mt-6 mb-3">Erreur 403</h1>
            </div>
        </div>
        <div class="text-center">
            <p class="lead text-secondary mb-5">Vous n'êtes pas autorisé à accéder à cette page</p>
            <a href="/">
                <button class="btn btn-primary text-white px-5" type="button">Retourner à la page d'accueil</button>
            </a>
        </div>
    </div>
@endsection

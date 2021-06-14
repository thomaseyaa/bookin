@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 pb-lg-10 d-none d-lg-block d-xl-block" id="menu">
                <ul class="mx-0 px-0 pt-12 list-unstyled">
                    <li class="mb-3"><span class="initialism">Compte</span></li>
                    <li class="mb-2"><a class="btn-link" href="#">Modifier mes informations</a></li>
                    <li class="mb-2"><a class="btn-link" href="#">Modifier mon mot de passe</a></li>
                    <li class="mb-2"><a class="btn-link" href="#">Gérer mon abonnement</a></li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12" id="text">
                <h1 class="display-4">Nom utilisateur</h1>
                <p class="lead">Abonnement Basic</p>
                <span>Prochaine date de facturation : 28 juillet 2021.</span><br>
                <a href="#">Utiliser une carte cadeau ou un code de promotion.</a>
            </div>
        </div>
    </div>
@endsection

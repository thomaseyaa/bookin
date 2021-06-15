@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 pb-lg-10 d-none d-lg-block d-xl-block" id="menu">
                <ul class="mx-0 px-0 pt-12 list-unstyled">
                    <li class="mb-3"><span class="initialism">Admin</span></li>
                    <li class="mb-2"><a class="btn-link" href="/usersList">Gérer les utilisateurs</a></li>
                    <li class="mb-2"><a class="btn-link" href="#">Gérer les abonnements</a></li>
                    <li class="mb-2"><a class="btn-link" href="/newsList">Gérer les actualités</a></li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12" id="text">
                <h1 class="display-4">{{ session('user')->email }}</h1>
                <p class="lead">Compte administrateur</p>
                <span>6 utilisateurs inscrits</span><br>
                <span>3 abonnements en cours</span><br>
                <span>12 publications</span><br>
            </div>
        </div>
    </div>
@endsection

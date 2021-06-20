@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 pb-lg-10 d-none d-lg-block d-xl-block">
                <ul class="mx-0 px-0 pt-12 list-unstyled">
                    <li class="mb-3"><span class="initialism">Compte</span></li>
                    <li class="mb-2"><a class="btn-link" href="/profileForm">Modifier mes informations</a></li>
                    <li class="mb-2"><a class="btn-link" href="/passwordForm">Modifier mon mot de passe</a></li>
                    <li class="mb-2"><a class="btn-link" href="#">Gérer mon abonnement</a></li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12">
                <h1 class="display-4">Modifier mes informations</h1>
                <div class="container mt-5">
                    <div class="row">
                        <form method="post" action='/updatePassword'>
                            @csrf
                            <div class="form-group mb-5">
                                <input class="form-control rounded" type="password" name="password" value="" placeholder="Mot de passe">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn btn-primary mb-4 w-100" type="submit">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

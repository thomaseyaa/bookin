@extends('layout.default')

@section('content')
    <!-- PASSWORD RECOVERY-->
    <div class="pt-10 pb-16 bg-primary-light">
        <div class="container">
            <div class="row mt-8">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="card rounded-lg shadow-sm">
                        <div class="card-header px-lg-7 px-4 pt-3 pb-0 border-0 bg-transparent">
                            <div class="row d-flex justify-content-center">
                                <div class="col pt-4 mb-2">
                                    <h5>Mot de passe oublié</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-block px-lg-7 px-4 pb-6">
                            <p class="lead text-muted mb-4 mr-3">Entrez l'email que vous avez utilisé lors de votre enregistrement pour récupérer votre mot de passe ou <a href="/contact">contactez-nous</a> si vous avez besoin d'aide.</p>
                            <form>
                                <div class="input-group mb-5">
                                    <input class="form-control rounded mx-0 mr-2" type="text" placeholder="Email">
                                    <button class="btn btn-primary text-white" type="button">Envoyer</button>
                                </div>
                                <a class="text-muted" href="/enter">
                                    <i class="fas fa-caret-square-left mr-2"></i>
                                    Se connecter
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

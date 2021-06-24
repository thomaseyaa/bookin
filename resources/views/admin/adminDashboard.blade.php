@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            @include('include.adminSidebar')
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12" id="text">
                <h1 class="display-4">{{ session('user')->email }}</h1>
                <p class="lead text-secondary">Compte administrateur</p>
                <blockquote class="blockquote py-2 px-5 mb-6 mr-10">
                    <span>3 utilisateurs inscrits</span><br>
                    <span>3 abonnements en cours</span><br>
                    <span>3 articles publiés</span><br>
                </blockquote>
            </div>
        </div>
    </div>
@endsection

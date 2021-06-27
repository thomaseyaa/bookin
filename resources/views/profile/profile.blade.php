@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            @include('include.userSidebar')
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12">
                @if(empty(session('user')->firstname))
                    <h1 class="display-4">{{ session('user')->email }}</h1>
                @else
                    <h1 class="display-4">{{ session('user')->firstname }} {{ session('user')->lastname }}</h1>
                @endif
                @if(empty(session('user')->stripe_id))
                    <p class="lead">Aucun abonnement</p><br>
                    <p><a href="/price">Abonnez-vous</a> pour profiter de millions de livres en illimité.</p>
                @else
                    <p class="lead">Abonnement Basic</p>
                    <span>Prochaine date de facturation : 28 juillet 2021.</span><br>
                    <a href="/price">Utiliser une carte cadeau ou un code de promotion.</a>
                @endif
            </div>
        </div>
    </div>
@endsection

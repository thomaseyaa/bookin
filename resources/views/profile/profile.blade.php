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
                <p class="lead">Abonnement Basic</p>
                <span>Prochaine date de facturation : 28 juillet 2021.</span><br>
                <a href="#">Utiliser une carte cadeau ou un code de promotion.</a>
            </div>
        </div>
    </div>
@endsection

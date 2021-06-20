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
                <p class="lead">Articles</p>
                <a href="/adminAddUserForm">Ajouter un article</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Déscription</th>
                        <th>Article</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allNews as $new)
                        <tr>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->description }}</td>
                            <td>{{ $new->body }}</td>
                            <td>@if($new->published==0) Non publié @else Publié @endif</td>
                            <td>{{ $new->published_at }}</td>
                            <td>
                                <a href="/adminUpdateNewForm/{{$new->id}}">Modifier</a>
                                <a class="text-danger" href="/adminDeleteNew/{{$new->id}}">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

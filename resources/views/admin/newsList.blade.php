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
                <div class="mb-3">
                    <a href="/adminAddNewsForm">Ajouter un article</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Déscription</th>
                        <th>Article</th>
                        <th>Statut</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allNews as $news)
                        <tr>
                            <td>{{ $news->title }}</td>
                            <td>{{ $news->description }}</td>
                            <td>{{ $news->body }}</td>
                            <td>@if($news->published==0) Non publié @else Publié @endif</td>
                            <td>@if(isset($news->updated_at))Modifié le {{ $news->updated_at }}@else Crée le {{ $news->created_at }}@endif</td>
                            <td>
                                <a href="/adminUpdateNewsForm/{{$news->id}}">Modifier</a>
                                <a class="text-danger" href="/adminDeleteNews/{{$news->id}}">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

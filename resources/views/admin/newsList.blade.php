@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            @include('include.adminSidebar')
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12" id="text">
                <h1 class="display-4">{{ session('user')->email }}</h1>
                <p class="lead">Articles</p>
                <div class="mb-3">
                    <a href="/adminAddNewsForm">Ajouter un article</a>
                </div>
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Déscription</th>
                        <th>Image</th>
                        <th>Texte</th>
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
                            <td> <img src="{{ asset($news->img_url) }}" alt="{{ $news->title }}" width="50px"></td>
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

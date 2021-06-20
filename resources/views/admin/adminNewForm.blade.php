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
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12">
                @if(isset($new))
                    <h1 class="display-4">Modifier l'article {{$new->id}}</h1>
                    <div class="container mt-5">
                        <div class="row">
                            <form method="post" action="/adminUpdateNew/{{$new->id}}">
                                @csrf
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="text" name="title" value="{{ $new->title }}" placeholder="Titre">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="text" name="description" value="{{ $new->description }}" placeholder="Description">
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <textarea class="form-control rounded" rows="6" name="body" value="{{ $new->body }}" placeholder="Text"></textarea>
                                    @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-check mb-4">
                                    <label class="form-check-label text-muted">
                                        <input class="form-check-input mr-2" type="checkbox" name="published" value="true">
                                        <small>Publier ?</small>
                                    </label>
                                </div>
                                <button class="btn btn-primary mb-4 w-100" type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                @else
                    <h1 class="display-4">Créer un article</h1>
                    <div class="container mt-5">
                        <div class="row">
                            <form method="post" action='/adminAddNew'>
                                @csrf
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="text" name="title" placeholder="Titre">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="text" name="description" placeholder="Description">
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <textarea class="form-control rounded" rows="6" name="body" placeholder="Text"></textarea>
                                    @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-check mb-4">
                                    <label class="form-check-label text-muted">
                                        <input class="form-check-input mr-2" type="checkbox" name="published" value="true">
                                        <small>Publier ?</small>
                                    </label>
                                </div>
                                <button class="btn btn-primary mb-4 w-100" type="submit">Ajouter</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

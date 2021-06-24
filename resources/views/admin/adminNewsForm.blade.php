@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            @include('include.adminSidebar')
            <div class="col-lg-8 col-md-8 col-sm-12 pt-12 pb-12">
                @if(isset($news))
                    <h1 class="display-4">Modifier l'article {{$news->id}}</h1>
                    <div class="container mt-5">
                        <div class="row">
                            <form method="post" action="/adminUpdateNews/{{$news->id}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="text" name="title" value="{{ $news->title }}" placeholder="Titre">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="text" name="description" value="{{ $news->description }}" placeholder="Description">
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control rounded text-muted" type="file" name="img">
                                    @error('img')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <textarea class="form-control rounded" type="text" rows="6" name="body" value="{{ $news->body }}" placeholder="Texte"></textarea>
                                    @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-check mb-4">
                                    <label class="form-check-label text-muted">
                                        <input class="form-check-input mr-2" type="checkbox" name="published" value="true">
                                        <small>Publier l'article ?</small>
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
                            <form method="post" action='/adminAddNews' enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <input class="form-control rounded" type="text" name="title" placeholder="Titre" value="{{ old('title') }}">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control rounded" type="text" name="description" placeholder="Description" value="{{ old('description') }}">
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control rounded text-muted" type="file" name="img">
                                    @error('img')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <textarea class="form-control rounded" rows="6" name="body" value="{{ old('body') }}" placeholder="Texte"></textarea>
                                    @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-check mb-4">
                                    <label class="form-check-label text-muted">
                                        <input class="form-check-input mr-2" type="checkbox" name="published" value="true">
                                        <small>Publier l'article ?</small>
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

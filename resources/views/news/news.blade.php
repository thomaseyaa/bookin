@extends('layout.default')

@section('content')
    <!-- NEWS-->
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col text-center pt-8 pb-6">
                    <h1 class="display-3 mt-12 mb-3">Actualités</h1>
                </div>
            </div>
            @if(!$allNews->isEmpty())
            <div class="row">
                <div class="col-lg-12 mr-auto">
                    <div class="card-deck mb-5">
                        @foreach ($allNews as $news)
                        <div class="card rounded-lg overflow-hidden">
                            <img class="card-img-top" src="{{ asset($news->img_url) }}" alt="{{ $news->title }}">
                            <div class="card-body px-5 pt-4">
                                <div class="mt-2 mb-3 text-muted small"><i class="far fa-clock mr-2"></i>{{ $news->created_at }}</div>
                                <a class="h5 text-dark stretched-link" href="{{ '/article/'. $news->id }}">{{ $news->title }}</a>
                                <p class="text-muted my-2">{{ $news->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row pt-8 pb-12">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item ml-auto"><a class="page-link text-muted" href="{{ $allNews->previousPageUrl() }}">Précedent</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javaScript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javaScript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javaScript:void(0)">3</a></li>
                            <li class="page-item mr-auto"><a class="page-link text-muted" href="{{ $allNews->nextPageUrl() }}">Suivant</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        @else
            <div class="text-center pb-15">
                <p class="lead mb-5">Aucun résultat ne correspond à votre recherche.</p>
                <a href="/">
                    <button class="btn btn-primary text-white px-5" type="button">Retourner à la page d'accueil</button>
                </a>
            </div>
        @endif
    </div>
@endsection

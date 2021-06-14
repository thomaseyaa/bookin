@extends('layout.default')

@section('content')
    <!-- NEWS-->
    <div class="bg-light">
        <div class="container" >
            <div class="row">
                <div class="col text-center pt-8 pb-6">
                    <h1 class="display-3 mt-12 mb-3">Actualités</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mr-auto">
                    <div class="card-deck mb-5">
                        <div class="card rounded-lg overflow-hidden">
                            <img class="card-img-top" alt="Photo" src="/images/1.jpg">
                            <div class="card-body px-5 pt-4">
                                <div class="mt-2 mb-3 text-muted small"><i class="far fa-clock mr-2"></i>Il y'a 2 heures</div>
                                <a class="h5 text-dark stretched-link" href="/article">Lorem ipsum dolor</a>
                                <p class="text-muted my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel</p>
                            </div>
                        </div>

                        <div class="card rounded-lg overflow-hidden">
                            <img class="card-img-top" alt="Photo" src="/images/2.jpg">
                            <div class="card-body px-5 pt-4">
                                <div class="mt-2 mb-3 text-muted small"><i class="far fa-clock mr-2"></i>Il y'a 2 heures</div>
                                <a class="h5 text-dark stretched-link" href="/article">Lorem ipsum dolor</a>
                                <p class="text-muted my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel</p>
                            </div>
                        </div>

                        <div class="card rounded-lg overflow-hidden">
                            <img class="card-img-top" alt="Photo" src="/images/3.jpg">
                            <div class="card-body px-5 pt-4">
                                <div class="mt-2 mb-3 text-muted small"><i class="far fa-clock mr-2"></i>Il y'a 2 heures</div>
                                <a class="h5 text-dark stretched-link" href="/article">Lorem ipsum dolor</a>
                                <p class="text-muted my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-deck mb-5">
                        <div class="card rounded-lg overflow-hidden">
                            <img class="card-img-top" alt="Photo" src="/images/3.jpg">
                            <div class="card-body px-5 pt-4">
                                <div class="mt-2 mb-3 text-muted small"><i class="far fa-clock mr-2"></i>Il y'a 2 heures</div>
                                <a class="h5 text-dark stretched-link" href="/article">Lorem ipsum dolor</a>
                                <p class="text-muted my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel</p>
                            </div>
                        </div>

                        <div class="card rounded-lg overflow-hidden">
                            <img class="card-img-top" alt="Photo" src="/images/1.jpg">
                            <div class="card-body px-5 pt-4">
                                <div class="mt-2 mb-3 text-muted small"><i class="far fa-clock mr-2"></i>Il y'a 2 heures</div>
                                <a class="h5 text-dark stretched-link" href="/article">Lorem ipsum dolor</a>
                                <p class="text-muted my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel</p>
                            </div>
                        </div>

                        <div class="card rounded-lg overflow-hidden">
                            <img class="card-img-top" alt="Photo" src="/images/2.jpg">
                            <div class="card-body px-5 pt-4">
                                <div class="mt-2 mb-3 text-muted small"><i class="far fa-clock mr-2"></i>Il y'a 2 heures</div>
                                <a class="h5 text-dark stretched-link" href="/article">Lorem ipsum dolor</a>
                                <p class="text-muted my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-8 pb-12">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item ml-auto"><a class="page-link text-muted" href="javaScript:void(0)">Précedent</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javaScript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javaScript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="javaScript:void(0)">3</a></li>
                            <li class="page-item mr-auto"><a class="page-link text-muted" href="javaScript:void(0)">Suivant</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.default')

@section('content')
    <!-- ARTICLE-->
    <div class="bg-light">
        <div class="container">
            <div class="col text-center pt-8 pb-6">
                <h1 class="display-3 mt-12 mb-3">Article</h1>
            </div>
            <div class="row pb-10">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <div class="mb-3 lead initialism"><i class="fas fa-clock mr-2"></i>{{ $news->created_at }}</div>
                    <h1 class="display-4 mt-4 mb-3">{{ $news->title }}</h1>
                    <p class="lead mb-4 text-muted">{{ $news->description }}</p>
                    <div class="my-5 text-center">
                        <img class="w-100 rounded mb-3" alt="Photo" src="/images/1.jpg">
                    </div>
                    <p class="mb-5">Lorem ipsum dolor sit amet cons lectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae labo placeat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae labo.</p>
                    <p>{{ $news->body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

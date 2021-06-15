@extends('layout.default')

@section('content')
<div class="pt-10 pb-16 bg-primary-light">
    <div class="container">
        <div class="row mt-8">
            <div class="col-lg-6 col-md-10 m-auto">
                <div class="card rounded-lg">
                    <div class="card-header px-lg-7 px-4 pt-3 pb-0 border-0 bg-transparent">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <nav>
                                    <div class="nav nav-tabs text-center" role="tablist">
                                        <a class="nav-item nav-link font-weight-bold px-3 active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">
                                            <h5>Connexion</h5>
                                        </a>
                                        <a class="nav-item nav-link font-weight-bold px-3" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="true">
                                            <h5>Inscription</h5>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                            <div class="card-block px-lg-7 px-4 pt-6 pb-5">
                                @if(session('status'))
                                    <div class="alert alert-success text-center">{{ session('status') }}</div>
                                @endif

                                @if(session('error'))
                                    <div class="alert alert-danger text-center ">{{ session('error') }}</div>
                                @endif
                                <form method="post" action='/login'>
                                    @csrf
                                    <div class="form-group mb-2">
                                        <input class="form-control rounded" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control rounded" type="password" id="password" name="password" placeholder="Mot de passe" value="{{ old('password') }}">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-check mb-4">
                                        <label class="form-check-label text-muted">
                                            <input class="form-check-input mr-2" type="checkbox" value="">
                                            <span class="small">Garder ma session</span>
                                        </label>
                                    </div>
                                    <button class="btn btn-primary-light text-primary rounded-pill mb-4 w-100" type="submit">Connexion</button>

                                    <div>
                                        <div class="col text-center pb-3">
                                            <span class="text-muted">OU</span>
                                        </div>
                                    </div>

                                    <div class="btn-group justify-content-center w-100">
                                        <div class="mb-2 px-2">
                                            <a class="icon rounded-circle btn btn-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                        <div class="mb-2 px-2">
                                            <a class="icon rounded-circle btn btn-google" href="#"><i class="fab fa-google"></i></a>
                                        </div>
                                    </div>

                                    <a class="text-muted small" href="/password-recovery">
                                        <i class="fas fa-question-circle mr-2"></i>
                                        Mot de passe oublié
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                            <div class="card-block px-lg-7 px-4 pt-6 pb-5">
                                <form method="post" action='/register'>
                                    @csrf
                                    <div class="form-group mb-2"><input class="form-control rounded" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}"></div>
                                    <div class="form-group mb-2"><input class="form-control rounded" type="password" id="password" name="password" placeholder="Mot de passe" value="{{ old('password') }}"></div>
                                    <div class="form-group mb-3"><input class="form-control rounded" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmez votre mot de passe" value="{{ old('password_confirmation') }}"></div>
                                    <div class="form-check mb-4">
                                        <label class="form-check-label text-muted">
                                            <input class="form-check-input mr-2" type="checkbox" value="">
                                            <small>Accepter notre politique de <a href="javaScript:void(0)">confidentialité</a></small>
                                        </label>
                                    </div>
                                    <button class="btn btn-primary-light text-primary rounded-pill mb-4 w-100" type="submit">Register</button>

                                    <div>
                                        <div class="col text-center pb-3">
                                            <span class="text-muted">OU</span>
                                        </div>
                                    </div>

                                    <div class="btn-group justify-content-center w-100">
                                        <div class="mb-2 px-2">
                                            <a class="icon rounded-circle btn btn-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                        <div class="mb-2 px-2">
                                            <a class="icon rounded-circle btn btn-google" href="#"><i class="fab fa-google"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

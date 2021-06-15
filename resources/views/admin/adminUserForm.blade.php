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
                <h1 class="display-4">Modifier les informations de l'utilisateur</h1>
                <div class="container mt-5">
                    <div class="row">
                        @if(isset($user))
                            <form method="post" action="/adminUpdateUser/{{$user->id}}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group mb-5 col-lg-6 col-md-12 col-sm-12 pr-2">
                                        <input class="form-control rounded" type="text" name="firstname" value="{{ $user->firstname }}">
                                        @error('firstname')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5 col-lg-6 col-md-12 col-sm-12 pl-2">
                                        <input class="form-control rounded" type="text" name="lastname" value="{{ $user->lastname }}">
                                        @error('lastname')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="email" name="email" value="{{ $user->email }}">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="password" name="password" value="">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary mb-4 w-100" type="submit">Enregistrer</button>
                            </form>
                        @else
                            <form method="post" action='/adminAddUser'>
                                @csrf
                                <div class="form-row">
                                    <div class="form-group mb-5 col-lg-6 col-md-12 col-sm-12 pr-2">
                                        <input class="form-control rounded" type="text" name="firstname">
                                        @error('firstname')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-5 col-lg-6 col-md-12 col-sm-12 pl-2">
                                        <input class="form-control rounded" type="text" name="lastname">
                                        @error('lastname')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="email" name="email">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control rounded" type="password" name="password" value="">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary mb-4 w-100" type="submit">Enregistrer</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

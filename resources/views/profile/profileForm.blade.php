@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            @include('include.userSidebar')
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12">
                <h1 class="display-4">Modifier mes informations</h1>
                <div class="container mt-5">
                    <div class="row">
                        <form method="post" action='/updateUser'>
                            @csrf
                            <div class="form-row">
                                <div class="form-group mb-5 col-lg-6 col-md-12 col-sm-12 pr-2">
                                    <input class="form-control rounded" type="text" name="firstname" value="@if(old('firstname')){{ old('firstname') }}@else{{ session('user')->firstname }}@endif" placeholder="Prénom">
                                    @error('firstname')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5 col-lg-6 col-md-12 col-sm-12 pl-2">
                                    <input class="form-control rounded" type="text" name="lastname" value="@if(old('lastname')){{ old('lastname') }}@else{{ session('user')->lastname }}@endif" placeholder="Nom">
                                    @error('lastname')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control rounded" type="email" name="email" value="@if(old('email')){{ old('email') }}@else{{ session('user')->email }}@endif" placeholder="Email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn btn-primary mb-4 w-100" type="submit">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

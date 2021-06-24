@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="container pt-8">
        <div class="row">
            @include('include.adminSidebar')
            <div class="col-lg-8 col-md-12 col-sm-12 pt-12 pb-12" id="text">
                <h1 class="display-4">{{ session('user')->email }}</h1>
                <p class="lead">Utilisateurs</p>
                <div class="mb-3">
                    <a href="/adminAddUserForm">Ajouter un utilisateur</a>
                </div>
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Statut</th>
                        <th>Inscription</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allUsers as $user)
                        <tr>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>@if($user->is_admin==0) Utilisateur @else Administrateur @endif</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="/adminUpdateUserForm/{{$user->id}}">Modifier</a>
                                <a class="text-danger" href="/adminDeleteUser/{{$user->id}}">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

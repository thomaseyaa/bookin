@extends('layout.default')

@section('content')
    <!-- CONTACT-->
    <div class="container mt-6" >
        <div class="row">
            <div class="col text-center pt-8 pb-6">
                <h1 class="display-3 mt-6 mb-3">Tarifs</h1>
            </div>
        </div>
        <div class="container mb-12">
            <div class="mb-5">
                <p class="text-center lead">De millions de livres vous attendent 😊</p>
            </div>
            <div class="row">
                <div class="card-deck m-auto">
                    <div class="card bg-gray-light border-radius-10 mx-2">
                        <div class="card-body px-6 pt-6">
                            <div class="mb-5 row">
                                <h3>Basic</h3>
                                <h3 class="text-primary ml-5">7,99€/mois</h3>
                            </div>
                            <div>
                                <div class="mb-2 d-flex align-items-start">
                                    <div class="text-primary">
                                        <i class="fas fa-check-circle fa-lg"></i>
                                    </div>
                                    <span class="ml-3">Téléchargements illimités</span>
                                </div>
                                <div class="mb-2 d-flex align-items-start">
                                    <div class="text-primary mr-3">
                                        <i class="fas fa-check-circle fa-lg"></i>
                                    </div>
                                    <span>Lorem ipsum dolor sit amet</span>
                                </div>
                                <div class="mb-2 d-flex align-items-start">
                                    <div class="text-danger mr-3">
                                        <i class="fas fa-times-circle fa-lg"></i>
                                    </div>
                                    <span>Lorem ipsum dolor sit amet</span>
                                </div>
                                <div class="mb-2 d-flex align-items-start">
                                    <div class="text-danger mr-3">
                                        <i class="fas fa-times-circle fa-lg"></i>
                                    </div>
                                    <span>Lorem ipsum dolor sit amet</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-gray-light border-0 px-6 pb-3">
                            <a class="btn btn-primary text-white w-100 mb-3" href="javascript:void(0)">Continuer</a>
                        </div>
                    </div>
                    <div class="card bg-gray-light border-radius-10 mx-2">
                        <div class="card-body px-6 pt-6">
                            <div class="mb-5 row">
                                <h3>Pro</h3>
                                <h3 class="text-primary ml-7">17,99€/mois</h3>
                            </div>
                            <div>
                                <div class="mb-2 d-flex align-items-start">
                                    <div class="text-primary">
                                        <i class="fas fa-check-circle fa-lg"></i>
                                    </div>
                                    <span class="ml-3">Téléchargements illimités</span>
                                </div>
                                <div class="mb-2 d-flex align-items-start">
                                    <div class="text-primary mr-3">
                                        <i class="fas fa-check-circle fa-lg"></i>
                                    </div>
                                    <span>Lorem ipsum dolor sit amet</span>
                                </div>
                                <div class="mb-2 d-flex align-items-start">
                                    <div class="text-primary mr-3">
                                        <i class="fas fa-check-circle fa-lg"></i>
                                    </div>
                                    <span>Lorem ipsum dolor sit amet</span>
                                </div>
                                <div class="mb-2 d-flex align-items-start">
                                    <div class="text-primary mr-3">
                                        <i class="fas fa-check-circle fa-lg"></i>
                                    </div>
                                    <span>Lorem ipsum dolor sit amet</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-gray-light border-0 px-6 pb-3">
                            <a class="btn btn-primary w-100 mb-3" href="javascript:void(0)">Continuer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

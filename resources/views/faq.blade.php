@extends('layout.default')

@section('content')
    <!-- FAQ-->
    <div class="container mt-6 mb-15">
        <div class="row">
            <div class="col text-center pt-8 pb-6">
                <h1 class="display-3 mt-6 mb-3">Questions</h1>
            </div>
            <div class="col-lg-9 col-md-10 col-sm-12 mx-auto">
                <div class="d-flex align-items-center mb-4" id="general">
                    <div class="icon bg-primary-light text-primary rounded mr-2"><i class="fas fa-cog"></i></div><span class="text-primary">Generale</span>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0">
                            <a class="card-header btn btn-link px-1 py-1 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a0" aria-expanded="true" aria-controls="a0" id="q0">
                                <span class="lead text-dark mb-0 pb-0 mr-5">Lorem ipsum dolor sit?</span>
                            </a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a0" aria-labelledby="q0">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0">
                            <a class="card-header btn btn-link px-1 py-1 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a1" aria-expanded="true" aria-controls="a1" id="q1">
                                <span class="lead text-dark mb-0 pb-0 mr-5">Cras pellentesque vulputate metus?</span>
                            </a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a1" aria-labelledby="q1">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-1 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a2" aria-expanded="true" aria-controls="a2" id="q2"><span class="lead text-dark mb-0 pb-0 mr-5">Faucibus est metus nec purus?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a2" aria-labelledby="q2">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0">
                            <a class="card-header btn btn-link px-1 py-1 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a3" aria-expanded="true" aria-controls="a3" id="q3">
                                <span class="lead text-dark mb-0 pb-0 mr-5">Sed iaculis felis vel gravida?</span>
                            </a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a3" aria-labelledby="q3">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0">
                            <a class="card-header btn btn-link px-1 py-1 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a4" aria-expanded="true" aria-controls="a4" id="q4">
                                <span class="lead text-dark mb-0 pb-0 mr-5">Cras pellentesque vulputate metus?</span>
                            </a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a4" aria-labelledby="q4">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="d-flex align-items-center mb-4 pt-11" id="accounts">
                    <div class="icon bg-primary-light text-primary rounded mr-2"><i class="fas fa-user"></i></div><span class="text-primary">Compte</span>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a5" aria-expanded="true" aria-controls="a5" id="q5"><span class="lead text-dark mb-0 pb-0 mr-5">Lorem ipsum dolor sit?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a5" aria-labelledby="q5">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a6" aria-expanded="true" aria-controls="a6" id="q6"><span class="lead text-dark mb-0 pb-0 mr-5">Sed iaculis felis vel gravida?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a6" aria-labelledby="q6">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a7" aria-expanded="true" aria-controls="a7" id="q7"><span class="lead text-dark mb-0 pb-0 mr-5">Lorem ipsum dolor sit?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a7" aria-labelledby="q7">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a8" aria-expanded="true" aria-controls="a8" id="q8"><span class="lead text-dark mb-0 pb-0 mr-5">Sed iaculis felis vel gravida?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a8" aria-labelledby="q8">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a9" aria-expanded="true" aria-controls="a9" id="q9"><span class="lead text-dark mb-0 pb-0 mr-5">Sed iaculis felis vel gravida?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a9" aria-labelledby="q9">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="d-flex align-items-center mb-4 pt-11" id=")-^subscription">
                    <div class="icon bg-primary-light text-primary rounded mr-2"><i class="fas fa-file"></i></div><span class="text-primary">Abonnement</span>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a10" aria-expanded="true" aria-controls="a10" id="q10"><span class="lead text-dark mb-0 pb-0 mr-5">Cras pellentesque vulputate metus eu? </span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a10" aria-labelledby="q10">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a11" aria-expanded="true" aria-controls="a11" id="q11"><span class="lead text-dark mb-0 pb-0 mr-5">Faucibus est metus nec purus?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a11" aria-labelledby="q11">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a12" aria-expanded="true" aria-controls="a12" id="q12"><span class="lead text-dark mb-0 pb-0 mr-5">Sed iaculis felis vel gravida?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a12" aria-labelledby="q12">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a13" aria-expanded="true" aria-controls="a13" id="q13"><span class="lead text-dark mb-0 pb-0 mr-5">Sed iaculis felis vel gravida?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a13" aria-labelledby="q13">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Sed iaculis felis vel gravida ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a14" aria-expanded="true" aria-controls="a14" id="q14"><span class="lead text-dark mb-0 pb-0 mr-5">Nunc gravida ligula sed?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a14" aria-labelledby="q14">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="d-flex align-items-center mb-4 pt-11" id="refund">
                    <div class="icon bg-primary-light text-primary rounded mr-2"><i class="fas fa-coins"></i></div><span class="text-primary">Remboursement</span>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a15" aria-expanded="true" aria-controls="a15" id="q15"><span class="lead text-dark mb-0 pb-0 mr-5">Faucibus est metus nec purus?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a15" aria-labelledby="q15">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a16" aria-expanded="true" aria-controls="a16" id="q16"><span class="lead text-dark mb-0 pb-0 mr-5">Dest metus nec purus?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a16" aria-labelledby="q16">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a17" aria-expanded="true" aria-controls="a17" id="q17"><span class="lead text-dark mb-0 pb-0 mr-5">Lorem ipsum dolor sit?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a17" aria-labelledby="q17">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a18" aria-expanded="true" aria-controls="a18" id="q18"><span class="lead text-dark mb-0 pb-0 mr-5">Sed iaculis felis vel gravida?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a18" aria-labelledby="q18">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="card accordion border-0 p-0"><a class="card-header btn btn-link px-1 py-2 mb-0 text-dark collapsed lead text-left border-0 rounded d-flex" href="#" data-toggle="collapse" data-target="#a19" aria-expanded="true" aria-controls="a19" id="q19"><span class="lead text-dark mb-0 pb-0 mr-5">Faucibus est metus nec purus?</span></a>
                            <div class="card-body collapse text-muted pt-0 pb-0 px-1 border-0" id="a19" aria-labelledby="q19">
                                <p class="my-3 py-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque vulputate metus eu gravida. Sed et nibh augue. Vivamus ornare, ante in tempor ornare, ex risus imperdiet purus, at faucibus est metus nec purus. Nunc gravida ligula sed gravida eleifend. Sed iaculis felis vel gravida tempor. Morbi orci ligula, congue ut nulla non, vehicula pulvinar est.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

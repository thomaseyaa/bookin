@extends('layout.default')

@section('content')
    <!-- CONTACT-->
    <div class="container mt-6" >
        <div class="row">
            <div class="col text-center pt-8 pb-6">
                <h1 class="display-3 mt-6 mb-3">Contact</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                @if(session('status'))
                    <p class="text-success text-center">{{ session('message') }}</p>
                @endif

                @if(session('error'))
                    <p class="text-success text-center ">{{ session('error') }}</p>
                @endif
                <form method="post" action="/sendMessage">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-lg-4 col-md-12 col-sm-12 pr-2">
                            <input class="form-control rounded" type="text" name="lastname" placeholder="Nom" value="{{ old('lastname') }}">
                            @error('lastname')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4 col-md-12 col-sm-12 px-2">
                            <input class="form-control rounded" type="text" name="firstname" placeholder="Prénom" value="{{ old('firstname') }}">
                            @error('firstname')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4 col-md-12 col-sm-12 pl-2">
                            <input class="form-control rounded" type="text"  name="email" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <textarea class="form-control rounded" rows="6" name="body" placeholder="Message" value="{{ old('body') }}"></textarea>
                        @error('body')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary text-white text-primary mb-3 w-100" type="submit">Envoyer</button>
                </form>
            </div>

            <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                <div class="rounded mt-8 mb-8" id="map" style="margin: auto; height: 400px; !important"></div>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=<?=env('API_KEY')?>&callback=initMap&libraries=&v=weekly"
                    async
                ></script>
            </div>
        </div>
    </div>
@endsection

@extends('landing-layout')

@section('title', 'Toko Buku | Register')

@section('body')
<div class="section section-signup" style="background-position: top center; min-height: 700px;">
    <div class="container">
        <div class="row">
            <div class="card card-signup" data-background-color="orange">
                <form class="form" method="post" action="{{route('register-submit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header text-center">
                        <h3 class="card-title title-up">Sign Up</h3>
                    </div>
                    <div class="card-body">
                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons-sharp">
                                        person
                                    </i>
                                </span>
                            </div>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{old('nama')}}" required spellcheck="false">
                        </div>
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons-sharp">
                                        mail
                                    </i>
                                </span>
                            </div>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{old('email')}}" required spellcheck="false">
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons-sharp">
                                        lock
                                    </i>
                                </span>
                            </div>
                            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required spellcheck="false">
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="input-group no-border">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons-sharp">
                                        lock
                                    </i>
                                </span>
                            </div>
                            <input type="password" placeholder="Konfirmasi Password" class="form-control @error('konfirmasi') is-invalid @enderror" name="konfirmasi" required spellcheck="false">
                        </div>
                        @error('konfirmasi')
                        <span class="invalid-feedback" role="alert">
                        </span>
                        @enderror

                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-neutral btn-round btn-lg">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col text-center mt-4">
            <a href="{{route('landing')}}" class="btn btn-outline-default btn-round btn-white btn-lg">Kembali Ke Landing Page</a>
        </div>
    </div>
</div>
@endsection
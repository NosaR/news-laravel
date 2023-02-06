@extends('layouts.logreg')
@section('container')
    {{-- Notifikasi Berhasil Tambah User
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    {{-- Notifikasi Login User --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="text-center mt-5">
        <img class="my-4" src="../img/icon.png" alt="" width="100" height="100">
        <h1 class="h3 my-3 fw-normal">Silahkan Login</h1>
    </div>

    <div class="col justify-content-center text-center my-5">

        <main class="form-signin w-75 m-auto my-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-2">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@gmail.com"
                        autofocus required value="">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-dark fw-bold my-3" type="submit">{{ __('Login') }}</button>
                <p class="d-block text-center"></p> Belum punya akun? <a href="/daftar_penulis"
                    class="text-decoration-none text-danger fw-bold">Daftar</a></p>
                <p class="my-3 text-center"></p> Kembali ke <a href="/"
                    class="text-decoration-none text-danger fw-bold">Myway.co.id</a>
                </p>
                <p class="my-5 text-muted text-center">Copyright &copy; 2023 myway.co.id.
                    All right reserved</p>
            </form>
        </main>
    </div>
@endsection
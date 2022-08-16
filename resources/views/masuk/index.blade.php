@extends('layouts.html')

@section('html')

<div class="row justify-content-center">
    <div class="col-md-4">
        
        {{-- pengecekan apakah statusnya sukses, success diambil dari registercontroller --}}
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- pengecekan jika login error, success diambil dari logincontroller --}}
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <form action="/masuk" method="POST">
                @csrf
                <img class="mb-4" src="img/logo3.png" alt="" width="120">
                <h1 class="h3 mb-3 fw-normal">Masuk Sekarang!!</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="email">Alamat Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
        
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>

            </form>
            <small class="d-block mt-3" >Belum Daftar? <a href="/daftar">Daftar Sekarang</a> </small>
        </main>

    </div>
</div>
@endsection
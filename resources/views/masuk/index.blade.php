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

        <main class="form-signin w-100 m-auto">
            <form>
                <img class="mb-4" src="img/logo3.png" alt="" width="120">
                <h1 class="h3 mb-3 fw-normal">Login Sekarang!!</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
        
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>

            </form>
            <small class="d-block mt-3" >Belum Daftar? <a href="/daftar">Daftar Sekarang</a> </small>
        </main>

    </div>
</div>
@endsection
@extends('layouts.html')

@section('html')

{{-- <div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <form action="{{ route('daftar.submit') }}" method="POST">
                @csrf
                <img class="mb-4" src="img/logo3.png" alt="" width="120">
                <h1 class="h3 mb-3 fw-normal">Daftar Disini</h1>
        
            <div class="form-floating">
                <input type="number" name="nik" class="form-control rounded-top @error('nik') is-invalid @enderror" id="nik" placeholder="nik">
                <label for="nik">NIK</label>
            </div>

            <div class="form-floating">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                <label for="nama">Nama</label>
            </div>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="email">
                <label for="email">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>

            <div class="form-floating">
                <input type="number" name="telp" class="form-control" id="telp" placeholder="telp">
                <label for="telp">Telepon</label>
            </div>
            
            <div class="form-floating">
                    <select class="form-control" name="gender" id="gender" placeholder="gender>
                    <sma><span class="warning">
                        <option value="jk">Jenis Kelamin</option> 
                        <option value="lk">Laki-Laki</option>
                        <option value="pr">Perempuan</option>
                    </select>
            </div>

            <div class="form-floating">
                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="tgl_lahir">
                <label for="tgl_lahir">Tanggal Lahir</label>
            </div>

            <div class="form-floating">
                <input type="text" name="domisili" class="form-control" id="domisili" placeholder="domisili">
                <label for="domisili">Domisili</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>

            </form>
            <small class="d-block mt-3" >Udah Punya Akun? <a href="/masuk">Masuk</a> </small>
        </main>

    </div>
</div> --}}

<div class="col-lg-18">
<div class="row justify-content-center">
    <div class="card bg-light" style="width: 40rem;"><br>
        <h3 class="text-center"><strong>Daftar</strong></h3><br>
        <form action="{{ route('daftar.submit') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="number" name="nik" class="form-control rounded-top @error('nik') is-invalid @enderror" id="nik" placeholder="nik" required value="{{ old('nik') }}">
                            <label for="nik">NIK (Nomor Induk Kepedudukan)</label>
                            @error('nik')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama"  required value="{{ old('nama') }}">
                            <label for="nama">Nama Lengkap</label>
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email"  required value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password"  required value="{{ old('password') }}">
                            <label for="password">Password</label>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="number" name="telp" class="form-control @error('telp') is-invalid @enderror" id="telp" placeholder="telp"  required value="{{ old('telp') }}">
                            <label for="telp">Telepon</label>
                            @error('telp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <div class="form-floating">
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender" placeholder="gender"  required value="{{ old('gender') }}">
                                <option value="perempuan/laki">Jenis Kelamin</option> 
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="tgl_lahir"  required value="{{ old('tgl_lahir') }}">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            @error('tgl_lahir')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="domisili" class="form-control @error('domisili') is-invalid @enderror" id="domisili" placeholder="domisili" required value="{{ old('domisili') }}">
                            <label for="domisili">Domisili</label>
                            @error('domisili')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>


                <div class="mb-3 form-check">                
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-1 mb-2" type="submit">Daftar</button><br>
        </form>
        <small class="d-block mt-2 mb-3 text-center" >Udah Punya Akun? <a href="/masuk">Masuk</a> </small>
    </div>
</div>
</div>

@endsection
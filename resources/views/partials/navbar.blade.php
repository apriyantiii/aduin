<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255, 255, 255)">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="img/logoterbaru.png" width="110" loading="lazy" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">
        <li class="nav-item">
            <a class="nav-link text-primary {{ ($tittle === "Beranda")? 'active' : '' }}" href="/beranda">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ ($tittle === "Beranda")? 'active' : '' }}" href="/beranda">Alur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ ($tittle === "Beranda")? 'active' : '' }}" href="/beranda">Ketentuan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary {{ ($tittle === "Beranda")? 'active' : '' }}" href="/beranda">Pengaduan</a>
        </li>
        
        <li class="nav-item">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Masuk
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Masuk/h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                  </div>
                </div>
              </div>
            {{-- <a class="nav-link text-light {{ ($tittle === "Masuk")? 'active' : '' }}" style="background-color: #0065F2; border-radius: 50px; padding-left: 30px; padding-right: 30px" href="/masuk">Masuk</a> --}}
        </li>
        <!-- Button trigger modal -->

        </ul>
    </div>
    </div>
</nav>
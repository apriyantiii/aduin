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
        </ul>

        <ul class="navbar-nav">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hi, {{ auth()->user()->nama }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
            </li>
            @else

            {{-- navbar untuk login --}}
            <li class="nav-item nav-lg">
                <a class="nav-link text-light {{ ($tittle === "Masuk")? 'active' : '' }}" style="background-color: #0065F2; border-radius: 50px; padding-left: 30px; padding-right: 30px" href="/masuk">Masuk</a>
            </li>
            
            @endauth
        </ul>

       
        <!-- Button trigger modal -->

        
    </div>
    </div>
</nav>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Desa Wonoayu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item{{ request()->is('/') ? ' active' : ''}}">
                            <a class="nav-link" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item{{ request()->is('layanan') ? ' active' : ''}}">
                            <a class="nav-link" href="/layanan">Layanan</a>
                        </li>
                        <li class="nav-item{{ request()->is('tentangkami') ? ' active' : ''}}">
                            <a class="nav-link" href="/tentangkami">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
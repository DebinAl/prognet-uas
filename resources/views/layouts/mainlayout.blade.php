<div class="shadow p-md-3 navbar navbar-expand-sm navbar-light bg-light text-dark sticky-top">
    <nav class="container-fluid text-dark">
        <a class="navbar-brand" href="#">Porto Ku</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link">{{ auth()->user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-link text-decoration-none nav-link">Log out</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Log in</a>
                    </li>
                @endauth
                
            </ul>
            

            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-dark  my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

@yield('nav-foot')

<!-- Footer -->
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out btn btn-outline-dark" data-abc="true"></a>
</div>
<footer class="footer border-top py-4">
    <p class="text-center">&copy 2022 Deb&Das || Inspired by : Hendra Wijaya and Hanif Izza Pratama</p>
</footer>
<!-- End Footer -->
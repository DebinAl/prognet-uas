<!doctype html>
<html lang="en">
<head>
<title>Porto Ku</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <!-- place navbar here -->
    @extends('layouts.mainlayout')

    @section('nav-foot')    
    
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <div class="container-fluid py-5 px-5">
        <img src="image/sage.png" alt="Cover Portofolio" width="200" class="rounded-circle img-thumbnail" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false"/>
        <h1 class="display-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Siti Nur Sage</h1>
        <p class="lead" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"> Sentinel | Heal me | Mommy</p>
        </div>
    </section>
    <!-- Akhir Jumbotron-->

    <!-- About -->
    <section id="about">
        <div class="container text-center">
            <div class="container py-5 px-3">
                <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="col">
                    <h2 class="fw-bold">About Me</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus laborum temporibus aspernatur totam illo aliquam itaque cupiditate vitae asperiores explicabo?
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae velit optio, modi nobis delectus a tempore tempora repellendus autem mollitia!
                    </div>
                </div>
            </div>
        </div>
        

    </section>
    <!-- akhir about -->
    
    <!-- Services -->
    <section class="services py-5" id="services">
        <div class="container-lg">
            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-lg-8">
                    <div class="section-tittle">
                        <h2 class="fw-bold mb-5 pt-5">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="service-item shadow-sm p-4 rounded border acard" >
                        <div class="icon my-3 fs-2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                        </svg>
                        </div>
                        <h3 class="fs-5 py-2">Web Development</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nisi recusandae illum vero provident incidunt omnis! Velit corporis laudantium ut.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="service-item shadow-sm p-4 rounded border acard">
                        <div class="icon my-3 fs-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        <h3 class="fs-5 py-2">Creative Design</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nisi recusandae illum vero provident incidunt omnis! Velit corporis laudantium ut.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="service-item shadow-sm p-4 rounded border acard">
                        <div class="icon my-3 fs-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                                <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
                                <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                        <h3 class="fs-5 py-2">Beatbox Showcase</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nisi recusandae illum vero provident incidunt omnis! Velit corporis laudantium ut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Services -->
<!-- akhir projects -->
<div class="" data-aos="fade-in" data-aos-duration="2000">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7e7e7" fill-opacity="1" d="M0,64L80,58.7C160,53,320,43,480,80C640,117,800,203,960,208C1120,213,1280,139,1360,101.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
</div>

{{-- Comment Section --}}
<section class="pt-5 pb-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-6" data-aos="fade-out" data-aos-duration="1000" data-aos-delay="100">
                <div class="section-tittle">
                    <h2 class="fw-bold mb-5">Comment Section</h2>
                </div>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-outline-dark px-3" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-outline-dark px-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                @foreach ($comment->take(3) as $card)
                                    <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $card->User->name }}</h4>
                                                <p class="card-text">{{ $card->comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>  
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    {{-- <div class="container-lg py-5">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-8">
                <div class="section-tittle">
                    <h2 class="fw-bold mb-5">Comment</h2>
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Nama yang komen</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Email yang komen</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    {{-- Carrousels --}}
    <section id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" data-aos="fade-in" data-aos-duration="2000">
        <div class="carousel-item active" >
            <img src="image/1.jpg" class="acard d-block w-100" alt="slide 1" style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class=" carousel-item">
            <img src="image/2.jpg" class="acard d-block w-100" alt="slide 2" style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image/3.jpg" class="acard d-block w-100" alt="slide 3"style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </section>

<section class="suggest py-5" id="suggest">
    <div class="container-lg py-4">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="section-title" data-aos="fade-down" data-aos-duration="1000">
                    <h2 class="fw-bold mb-5">Kasi Feedback Cuy!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="contact-item d-flex mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="icon fs-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Email</h3>
                        <p class="text-muted m-0">sitinursage@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item d-flex mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                    <div class="icon fs-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Phone</h3>
                        <p class="text-muted m-0">+6281234567890</p>
                    </div>
                </div>
                <div class="contact-item d-flex mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="icon fs-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
                        </svg>
                    </div>
                    <div class="text ms-3">
                        <h3 class="fs-5">Town</h3>
                        <p class="text-muted m-0">Tiongkok</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <form method="post" action="/">
                        @csrf
                        {{-- <div class="row">  
                            <div class="col-lg-6 mb-4">
                                <input type="text" placeholder="Your Name" class="form-control form-control-lg fs-6 border-0 shadow-sm @error('name') is-invalid @enderror" name="name" id="name"> 
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-4" >
                                <input type="text" placeholder="Email" class="form-control form-control-lg fs-6 border-0 shadow-sm @error('email') is-invalid @enderror" name="email" id="email"> 
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <input type="text" placeholder="Subject" class="form-control form-control-lg fs-6 border-0 shadow-sm @error('subject') is-invalid @enderror" name="subject" id="subject"> 
                                @error('subject')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                @auth
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                @else

                                @endauth
                                <textarea rows="5" placeholder="Your Advice" class="form-control form-control-lg fs-6 border-0 shadow-sm @error('advice') is-invalid @enderror" name="comment" id="comment"></textarea>
                                @error('invalid')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <button type="submit" class="btn btn-outline-dark px-3">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    @endsection
    <!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<script type="text/javascript" src="js/jawascript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
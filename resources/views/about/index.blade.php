<!doctype html>
<html lang="en">

<head>
  <title>About Porto Ku</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Box Icon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  @extends('layouts.mainlayout')

  @section('nav-foot')
  
  <div class="bg-white py-5 mt-5"> 
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 order-2 order-lg-1 px-5 mx-auto"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light pb-3">About Page</h2>
          <div class="text-justify">
            <p align="justify" class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur iusto earum quia, corrupti dicta modi laudantium iste porro excepturi, a quod, explicabo saepe? Provident in blanditiis perspiciatis doloremque, quo distinctio harum laborum sint consequatur asperiores, quibusdam velit labore nemo quisquam nisi eius sunt illo porro voluptatibus iure magni ex. Alias, architecto! Numquam accusamus voluptatem quod porro distinctio aliquam minus, totam nam ab inventore consectetur tempore nemo? Quo asperiores facilis sequi! Quibusdam aliquam non quidem! Repellat nostrum sequi, ducimus in quia aliquid qui dicta earum ut vero eius mollitia itaque blanditiis obcaecati laudantium, voluptate totam. Optio excepturi commodi doloremque eveniet possimus?</p><a href="#our-team" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
          </div>
        </div>
        <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="image/semangka.jpg" alt="help" class="img-fluid mb-4 mb-lg-0"></div>
      </div>
    </div>
  </div>

      
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,64L80,58.7C160,53,320,43,480,80C640,117,800,203,960,208C1120,213,1280,139,1360,101.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
  <div class="bg-light py-5 " style="width:100%;">
    <div class="container-fluid">
      <div class="row mb-4">
        <div class="col-lg-5">
          <h2 id="our-team" class="display-4 font-weight-light">Our team</h2>
          <p class="font-italic text-muted">Let's us introduce our team.</p>
        </div>
      </div>
  
  <div class="row mb-4">
    <div class="ow text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Debin Aliano</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item">2105551107<a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit et itaque error tempora assumenda nisi nulla delectus voluptas sint sequi?"<a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Bagus Artha</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class=" list-inline-item">2105551110<a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit et itaque error tempora assumenda nisi nulla delectus voluptas sint sequi?"<a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->
    </div>
  </div>
</div>

  </div>
  @endsection

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
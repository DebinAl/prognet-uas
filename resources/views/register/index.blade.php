<!doctype html>
<html lang="en">

<head>
  <title>Prognet Hehe</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
   <div class="shadow p-md-3 navbar navbar-expand-sm navbar-light bg-light text-dark sticky-top">
        <nav class="container-fluid text-dark">
            <a class="navbar-brand" href="#">Account</a>
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
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Log in</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-dark  my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
  </header>
  <main>

    <div class="container d-flex">
      <div class="container row justify-content-center">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">    
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form class="ms-5 me-5 col-4" action="/register" method="post">
          @csrf
          <div class="col text-center pt-5 pb-3">
            <h2>Create Account</h2>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Name</label>
            <input type="text"  class="form-control" name="name" id="name"/>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="email" class="form-control" name="email" id="email"/>
          </div>
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" class="form-control" name="password" id="password"/>
          </div>
      
          <!-- Submit button -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
          </div>
        
          <!-- to login buttons -->
          <div class="text-center">
            <p>Already have an account? <a href="/login">Log in</a></p>
          </div>
        </form>
      </div>
    </div>

    
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
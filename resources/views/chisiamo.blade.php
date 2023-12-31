<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP prima lezione</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Electrolize&family=Gabriela&family=Nova+Square&family=Orbitron:wght@400;600;800&family=Philosopher:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Il miglior team</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/chisiamo">Chi Siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/articoli">Articoli</a>
              </li>
            </ul>
            <div class="custom"></div>
          </div>
        </div>
      </nav>

<section class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row justify-content-around">
        <div class="col-12">
            <h1 class="display-1 text-center">I Nostri Fondatori</h1>
        </div>
        @foreach($fondatori as $fondatore)
        <div class="col-12 col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$fondatore["img"]}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center fw-bold">{{$fondatore["name"]}} {{$fondatore["surname"]}}</h5>
                  <p class="card-text lead text-center">{{$fondatore["role"]}}</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</section>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<style type="text/css">
    #navbar {
      background-color: rgb(3, 3, 121);
    }
    #header {
      background-color: rgb(2, 2, 90);
    }
    #body {
      background-color: rgb(1, 1, 54);
    }
  </style>
</head>
<body id="body">
  <nav id="navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Kaidoo Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        {{-- <form class="d-flex">
          <button class="btn btn-outline-light" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-light text-dark ms-1 rounded-pill">0</span>
          </button>
        </form> --}}
      </div>
    </div>
  </nav>
  <header id="header" class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder"><img src="img/store.jpeg" width="25%" alt="" srcset="" class="rounded-circle" /></h1>
        <p class="lead fw-normal text-white mb-0">Top up all game terpercaya? Di Kaidoo Store aja!!!</p>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($product as $item)
        <div class="col mb-5">
          <div class="card h-100">
            {{-- Sale Badge --}}
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
            <!-- Product image-->
            <img class="card-img-top" src="storage/{{ $item -> fotoProduct }}" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{ $item->namaProduct }}</h5>
                <!-- Product price-->
                {{-- $40.00 - $80.00 --}}
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/detail">View product</a></div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</body>
</html>
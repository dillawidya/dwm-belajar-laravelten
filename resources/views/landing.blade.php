<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Toko OnlineQU</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />
        <!-- Styles -->
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">TokoOnlineQU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                       
                    </ul>
                    <form class="d-flex">
    
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-light ms-1">
                                <i class="bi-person-fill me-1"></i>
                                Dashboard
                            </a>
                        @endauth
    
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-outline-light ms-1">
                                <i class="bi-person-fill me-1"></i>
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-outline-light ms-1">
                                <i class="bi-person-fill me-1"></i>
                                Register
                            </a>
                        @endguest
                    </form>
                </div>
            </div>
        </nav>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-5 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" width="200px" height="250px">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">Rp.{{ number_format($product->price, 0) }}</p>
                                    <!-- Tambahan informasi produk lainnya sesuai kebutuhan -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>

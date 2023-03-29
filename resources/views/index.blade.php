 @extends('layouts._main')
 @push('page')
     Home
 @endpush
 @section('main-section')
 <!-- carousel  -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/c2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5 class="mt-5">First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/c3.webp')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/c2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p> -->
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<h1 class="heading-main mt-4">
    Welcome to
    <small class="text-muted mx-3">lucky Electric</small>
</h1>




<div class="container">
    <h1 class="fs-5 fw-bold mt-5 mb-4 text-center"> We design tools to unveil your
        superpowers</h1>
    <div class="row">


        <div class="col-lg-3 col-sm-6 mb-2">
            <a class="text-decoration-none" href="">
                <img class="mb-3 ms-n3 mt-3" src="{{asset('img/Goldmedal-Logo.png')}}" width="200" alt="Feature" />
                <h4 class="mb-3 text-dark">Switch wire fan</h4>
                <p class="mb-0 fw-medium text-secondary">While most people enjoy casino gambling,</p>
            </a>
        </div>



        <div class="col-lg-3 col-sm-6 mb-2">
            <a class="text-decoration-none" href="">
                <img class="mb-3 ms-n3" src="{{asset('img/ashirvadlogo.svg')}}" width="200" alt="Feature" />
                <h4 class="mb-3 text-dark">Design surveys</h4>
                <p class="mb-0 fw-medium text-secondary">Sports betting,lottery and bingo playing for the fun</p>
            </a>
        </div>


        <div class="col-lg-3 col-sm-6 mb-2">
            <a class="text-decoration-none" href="">
                <img class="mb-3 ms-n3" src="{{asset('img/texmologo.png')}}" width="200" alt="Feature" />
                <h4 class="mb-3 text-dark">Preference tests</h4>
                <p class="mb-0 fw-medium text-secondary">The Myspace page defines the individual.</p>
            </a>
        </div>


        <div class="col-lg-3 col-sm-6 mb-2">
            <a class="text-decoration-none" href="">
                <img class="mb-3 ms-n3" src="{{asset('img/lglogo.png')}}" width="200" alt="Feature" />
                <h4 class="mb-3 text-dark">Five second tests</h4>
                <p class="mb-0 fw-medium text-secondary">Personal choices and the overall personality of the person.
                </p>
            </a>
        </div>


    </div>
    <!-- <div class="text-center"><a class="btn btn-warning" href="#!" role="button">SIGN UP NOW</a></div> -->
</div>
<!-- end of .container -->




<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row mt-5">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">modular range</h2>
                <p class="mb-4">With AIR Modular, we’ve just added a new feather to our hat. And this story is one
                    of meticulous craftsmanship, careful detailing, unmatched excellence, beauty and finesse. The
                    modular shape of AIR
                    products are minimalistic, flat and yet distinctive in appearance. </p>
                <p><a href="products.php" class="mbtn">Explore</a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('img/j1.jpg')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Switch</h3>
                    <strong class="product-price">32 Rs</strong>

                    <span class="icon-cross">
                        <img src="{{asset('img/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('img/j2.jpg')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Fan</h3>
                    <strong class="product-price">1750 Rs</strong>

                    <span class="icon-cross">
                        <img src="{{asset('img/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('img/j3.jpg')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Led</h3>
                    <strong class="product-price">130 Rs</strong>

                    <span class="icon-cross">
                        <img src="{{asset('img/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 4 -->

        </div>
        <div class="row my-5">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Wire range</h2>
                <p class="mb-4">V-Guard Service Cables are made using annealed rigid bare electrolytic grade
                    conductor, insulated and sheathed with specially formulated PVC which makes it suitable for
                    outdoor installation. </p>
                <p><a href="products.php" class="mbtn">Explore</a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0 ">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('img/j4.jpg')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">switch</h3>
                    <strong class="product-price">1000 Rs</strong>

                    <span class="icon-cross">
                        <img src="{{asset('img/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('img/j5.jpg')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">wire</h3>
                    <strong class="product-price">1300 Rs</strong>

                    <span class="icon-cross">
                        <img src="{{asset('img/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('img/j6.jpg')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">wire</h3>
                    <strong class="product-price">1100 RS</strong>

                    <span class="icon-cross">
                        <img src="{{asset('img/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 4 -->

        </div>
    </div>

    @endsection
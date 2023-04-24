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
                 <img src="{{ asset('img/c2.jpg') }}" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">

                 </div>
             </div>
             <div class="carousel-item">
                 <img src="{{ asset('img/c3.webp') }}" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">

                 </div>
             </div>
             <div class="carousel-item">
                 <img src="{{ asset('img/c2.jpg') }}" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">

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
                     <a class="text-decoration-none" href="product/goldmedal">
                         <img class="mb-3 ms-n3 mt-3" src="{{ asset('img/website/Goldmedal-Logo.png') }}" width="200"
                             alt="Feature" />
                         <h4 class="mb-3 text-dark">Switch wire fan</h4>
                         <p class="mb-0 fw-medium text-secondary">While most people enjoy casino gambling,</p>
                     </a>
                 </div>



                 <div class="col-lg-3 col-sm-6 mb-2">
                     <a class="text-decoration-none" href="product/ashiravd">
                         <img class="mb-3 ms-n3" src="{{ asset('img/website/ashirvadlogo.svg') }}" width="200"
                             alt="Feature" />
                         <h4 class="mb-3 text-dark">Design surveys</h4>
                         <p class="mb-0 fw-medium text-secondary">Sports betting,lottery and bingo playing for the fun</p>
                     </a>
                 </div>


                 <div class="col-lg-3 col-sm-6 mb-2">
                     <a class="text-decoration-none" href="product/texmo">
                         <img class="mb-3 ms-n3" src="{{ asset('img/website/texmologo.png') }}" width="200"
                             alt="Feature" />
                         <h4 class="mb-3 text-dark">Preference tests</h4>
                         <p class="mb-0 fw-medium text-secondary">The Myspace page defines the individual.</p>
                     </a>
                 </div>


                 <div class="col-lg-3 col-sm-6 mb-2">
                     <a class="text-decoration-none" href="product/lg">
                         <img class="mb-3 ms-n3" src="{{ asset('img/website/lglogo.png') }}" width="200"
                             alt="Feature" />
                         <h4 class="mb-3 text-dark">Five second tests</h4>
                         <p class="mb-0 fw-medium text-secondary">Personal choices and the overall personality of the
                             person.
                         </p>
                     </a>
                 </div>


             </div>
         </div>
         <!-- end of .container -->
         @foreach ($categories as $category)
             <!-- Start Product Section -->
             <div class="product-section">
                 <div class="container">
                     <div class="row ">

                         <!-- Start Column 1 -->
                         <div class="col-md-12 col-lg-3 mb-5 mb-lg-1">
                             <h2 class="mb-4 section-title">{{ $category->cat_name }}</h2>
                             <p class="mb-4">{{ substr($category->cat_desc, 0, 199) }}</p>
                             <p><a href="/product/wire" class="mbtn">Explore</a></p>
                         </div>
                         <!-- End Column 1 -->
                         @foreach ($products as $product)
                             @if ($category->cat_id == $product->cat_id)
                                 <!-- Start Column 2 -->
                                 @php
                                     
                                     $img = json_decode($product->P_img, true);
                                 @endphp
                                 <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                                     <div class="product-item">
                                         <a class="text-decoration-none" href="/products/{{ $product->p_id }}">

                                             <img src="{{ asset('storage/images/' . basename($img['image1'])) }}"
                                                 alt="Image 1" class="img-fluid product-thumbnail">
                                             <h2 class="product-title fw-bold "> {{ $product->p_name }}</h2>
                                             <strong class="product-price">₹{{ $product->p_price }} </strong>

                                         </a>
                                         <a href="/cart/{{ $product->p_id }}">

                                             <span class="icon-cross">
                                                 <img src="{{ asset('img/website/cross.svg') }}" class="img-fluid">
                                             </span>
                                         </a>
                                     </div>
                                 </div>
                                 {{-- <div class="col-12 col-sm-6 col-md-4 mb-5">
                                     <div class="post-entry">
                                         <a href="#" class="post-thumbnail"> <img
                                                 src="{{ asset('storage/images/' . basename($img['image1'])) }}"
                                                 alt="Image 1"></a>
                                         <div class="post-content-entry">
                                             <h3><a href="#">{{ $product->p_name }}</a></h3>
                                             <div class="meta">
                                                 <span>by <a href="#">{{ $product->p_price }}</a></span>
                                                 <span>on <a href="#">Dec 15, 2021</a></span>
                                             </div>
                                         </div>
                                     </div>
                                 </div> --}}
                                 <!-- End Column 2 -->
                             @else
                                 @continue
                             @endif
                         @endforeach


                     </div>
                 </div>
         @endforeach
     @endsection

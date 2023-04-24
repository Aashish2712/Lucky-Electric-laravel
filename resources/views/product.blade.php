  @extends('layouts._main')
  @push('page')
      Product
  @endpush
  @section('main-section')
      <div class="untree_co-section product-section before-footer-section">
          <div class="container">
              <div class="row">
                  @if (@isset($prod))
                      <!-- Start Column 1 -->
                      @foreach ($prod as $product)
                          @php
                              
                              $img = json_decode($product->P_img, true);
                          @endphp
                          {{-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                              <a class="product-item" href="#">
                                  <img src="{{ asset('storage/images/' . basename($img['image1'])) }}" alt="Image 1">
                                  <h3 class="product-title">{{ $product->p_name }}</h3>
                                  <strong class="product-price">{{ $product->p_price }}</strong>

                                  <span class="icon-cross">
                                      <img src="images/cross.svg" class="img-fluid">
                                  </span>
                              </a>
                          </div> --}}
                          <!-- Start Column 4 -->
                          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                              <div class="product-item">

                                  <a class="text-decoration-none" href="/products/{{ $product->p_id }}">
                                      <img src="{{ asset('storage/images/' . basename($img['image1'])) }}"
                                          class="img-fluid product-thumbnail" alt="Image 1">
                                      <h4 class="product-title text-dark fw-bold">{{ $product->p_name }}</h4>
                                      <strong class="product-price">₹{{ $product->p_price }} </strong>

                                  </a>
                                  <a href="/cart/{{ $product->p_id }}">
                                      <span class="icon-cross">
                                          <img src="{{ asset('img/website/cross.svg') }}" class="img-fluid">
                                      </span>
                                  </a>
                              </div>

                          </div>
                          <!-- End Column 4 -->
                      @endforeach


                      <!-- End Column 1 -->
                  @elseif(@isset($results))
                      @foreach ($results as $product)
                          @php
                              
                              $img = json_decode($product->P_img, true);
                          @endphp
                          {{-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                              <a class="product-item" href="#">
                                  <img src="{{ asset('storage/images/' . basename($img['image1'])) }}" alt="Image 1">
                                  <h3 class="product-title">{{ $product->p_name }}</h3>
                                  <strong class="product-price">{{ $product->p_price }}</strong>

                                  <span class="icon-cross">
                                      <img src="images/cross.svg" class="img-fluid">
                                  </span>
                              </a>
                          </div> --}}
                          <!-- Start Column 4 -->
                          <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                              <a class="product-item" href="/cart{{ $product->p_id }}">
                                  <img src="{{ asset('storage/images/' . basename($img['image1'])) }}"
                                      class="img-fluid product-thumbnail" alt="Image 1">
                                  <h3 class="product-title">{{ $product->p_name }}</h3>
                                  <strong class="product-price">{{ $product->p_price }} RS</strong>

                                  <span class="icon-cross">
                                      <img src="{{ asset('img/website/cross.svg') }}" class="img-fluid">
                                  </span>
                              </a>
                          </div>
                          <!-- End Column 4 -->
                      @endforeach
                  @else
                      <h2>{!! 'No records Found' !!}</h2>
                      @php return('/'); @endphp
                  @endif
              </div>
          </div>
      </div>

      {{-- 
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

    </div> --}}
  @endsection

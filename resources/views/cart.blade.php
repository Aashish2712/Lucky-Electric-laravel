  @extends('layouts._main')
  @push('page')
      Product
  @endpush
  @section('main-section')
      <!-- Start Hero Section -->
      <div class="hero">
          <div class="container">
              <div class="row justify-content-between">
                  <div class="col-lg-2">
                      <div class="intro-excerpt">
                          <h1>Cart</h1>
                      </div>
                  </div>

              </div>
          </div>
      </div>
      <!-- End Hero Section -->




      <div class="container">

          <div class="row mb-5">
              <form class="col-md-12" method="post">
                  <div class="site-blocks-table">

                      <table class="table">
                          <thead>
                              <tr>
                                  <th class="product-thumbnail">Image</th>
                                  <th class="product-name">Product</th>
                                  <th class="product-price">Price</th>
                                  <th class="product-quantity">Quantity</th>
                                  <th class="product-total">Total</th>
                                  <th class="product-remove">Remove</th>
                              </tr>
                          </thead>
                          @if ($results->count())
                              @php
                                  $total = 0;
                              @endphp
                              @foreach ($results as $product)
                                  @php
                                      
                                      $img = json_decode($product->P_img, true);
                                      $total = $total + $product->p_price * $product->quantity;
                                  @endphp
                                  <tbody>
                                      <tr>
                                          <td class="product-thumbnail">
                                              <img src="{{ asset('storage/images/' . basename($img['image1'])) }}"
                                                  alt="Image" class="img-fluid">
                                          </td>
                                          <td class="product-name">
                                              <h2 class="h5 text-black">{{ $product->p_name }}</h2>
                                          </td>
                                          <td>₹{{ $product->p_price }} </td>
                                          <td>
                                              <div class="input-group mb-3 d-flex align-items-center quantity-container"
                                                  style="max-width: 120px;">
                                                  <div class="input-group-prepend">
                                                      <button class="btn btn-outline-black decrease" type="button"
                                                          onclick="location.href='/cart/decrement/{{ $product->cart_id }}'">&minus;</button>
                                                  </div>
                                                  <input type="text" class="form-control text-center quantity-amount"
                                                      value="{{ $product->quantity }}" placeholder=""
                                                      aria-label="Example text with button addon"
                                                      aria-describedby="button-addon1">
                                                  <div class="input-group-append">
                                                      <button class="btn btn-outline-black increase" type="button"
                                                          onclick="location.href='/cart/increment/{{ $product->cart_id }}'">&plus;</button>
                                                  </div>
                                              </div>

                                          </td>
                                          <td>₹{{ $product->p_price * $product->quantity }} </td>
                                          <td><a href="/cart/remove/{{ $product->cart_id }}"
                                                  class="text-danger fw-bold text-decoration-none">X</a>
                                          </td>
                                      </tr>
                              @endforeach


                              </tbody>
                      </table>
                  </div>
              </form>

          </div>


          <div class="row justify-content-center">
              <div class="col-md-10">
                  <div class="row">
                      <div class="col-md-12 text-left border-bottom mb-5">
                          <h3 class="text-black h3 text-uppercase">Order Products</h3>
                      </div>
                  </div>

                  <div class="row mb-5">
                      <div class="col-md-6">
                          <span class="text-black h5">Total</span>
                      </div>
                      <div class="col-md-6 text-right">
                          <strong class="text-black">₹{{ $total }}</strong>

                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                          <button class="btn btn-success btn-lg py-3 btn-block" onclick="window.location='/checkout'">
                              Place Order
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      @else
          </table>
          <h3 class="my-5">No items in cart</h3>
      </div>
      </form>
      </div>
      @endif


      </div>
  @endsection

  @extends('layouts._main')
  @push('page')
      Product
  @endpush
  @section('main-section')
      @php
          
          $img = json_decode($products->P_img, true);
          $desc = json_decode($products->p_desc, true);
          //   dd($desc);
      @endphp
      <div class="container mt-5 mb-5">
          <div class="card">
              <div class="row g-0">
                  <div class=" border-end">
                      <div class="d-flex flex-column justify-content-center">
                          <div class="main_image"> <img src="{{ asset('storage/images/' . basename($img['image1'])) }}"
                                  id="main_product_image" width="350">
                          </div>

                          {{-- <div class="thumbnail_images">
                              <ul id="thumbnail">
                                  <li><img onclick="changeImage(this)"
                                          src="{{ asset('storage/images/' . basename($img['image2'])) }}" width="70">
                                  </li>
                                  {{-- <li><img onclick="changeImage(this)" src="https://i.imgur.com/w6kEctd.jpg" width="70">
                                  </li>
                                  <li><img onclick="changeImage(this)" src="https://i.imgur.com/L7hFD8X.jpg" width="70">
                                  </li>
                                  <li><img onclick="changeImage(this)" src="https://i.imgur.com/6ZufmNS.jpg" width="70">
                                  </li> 
                              </ul>
                          </div> --}}
                      </div>
                  </div>

              </div>
              <div class="row">

                  <div class="col-md-8">
                      <div class="p-3 right-side">
                          <div class="d-flex justify-content-between align-items-center">
                              <h3>{{ $products->p_name }}</h3> <span class="heart"><i class='bx bx-heart'></i></span>
                          </div>
                          <div class="mt-2 pr-3 content ">
                              <p>{{ $products->p_company }} , {{ $products->p_model }}</p>
                          </div>
                          <h3 class="text-success">₹{{ $products->p_price }} </h3>
                          <div class="row row-underline">
                              <div class="col-md-6"> <span class=" deal-text">Specifications</span> </div>
                              <div class="col-md-6"> <a href="#" data-abc="true"> <span
                                          class="ml-auto view-all"></span> </a> </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <table class="col-md-12">
                                      <tbody>
                                          @foreach ($desc as $key => $value)
                                              <tr class="row mt-10">
                                                  <td class="col-md-4"><span
                                                          class="p_specification">{{ $key }}:</span>
                                                  </td>
                                                  <td class="col-md-8">
                                                      <ul>
                                                          <li>{{ $value }}</li>
                                                      </ul>
                                                  </td>
                                              </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <a class="btn btn-dark px-5 py-3 mr-2" style=" border-radius: 0;"
                              href="/cart/{{ $products->p_id }}">Add
                              to
                              Cart</a>
                      </div>

                  </div>

                  <div class="col-md-4">

                      <div class="main_image"> <img src="{{ asset('storage/images/' . basename($img['image2'])) }}"
                              id="main_product_image" width="350">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection

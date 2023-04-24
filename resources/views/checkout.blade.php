@extends('layouts._main')
@push('page')
    Product
@endpush
@section('main-section')
    <div class="row my-5 justify-content-center">
        <div class="col-md-10 mb-3 mb-md-0">

            <div class="container">




                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-decoration-none fw-bold fs-3 text-dark"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Choose Your Delivery Address
                                </button>
                            </h5>
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <form action="/payment" id="address_form" method="POST">
                                    @csrf

                                    @foreach ($addr as $items)
                                        @php
                                            $address = json_decode($items->u_address, true);
                                            
                                        @endphp
                                        <div class="form-check my-3">
                                            <input class="form-check-input" type="radio" name="address" value="{{$items->a_id}}"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <span class="fw-bold fs-5 text-primary ">{{ $address['Name'] }} ,
                                                    {{ $address['contact'] , }}</span>
                                                
                                            </label>
                                            <p>{{ $address['landmark'] }} , {{$address['town'] , }} , {{ $address['District'] }}</p>
                                        </div>
                                    @endforeach

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed text-decoration-none" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="fw-bold fs-5 "> + Add new Address</span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">

                                <div class="untree_co-section">
                                    <div class="container">
                                        <h2 class="h3 mb-3 text-black"> Address for Delivery</h2>
                                        <div class="p-3 p-lg-5 border bg-white">
                                            <form action="/address" method="POST">
                                                @csrf

                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label for="fname" class="text-black">First Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="fname"
                                                            name="fname" value="{{ old('fname') }}" />
                                                        <span class="text-danger">
                                                            @error('fname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="lname" class="text-black">Last Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="lname"
                                                            name="lname" value="{{ old('lname') }}" />
                                                        <span class="text-danger">
                                                            @error('lname')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <label for="s_add" class="text-black">Address <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="s_add"
                                                            name="s_add" placeholder="Street address"
                                                            value="{{ old('s_add') }}" />
                                                        <span class="text-danger">
                                                            @error('s_add')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <input type="text" class="form-control" name="v_add"
                                                        placeholder="Village or Town " value="{{ old('v_add') }}" />
                                                    <span class="text-danger">
                                                        @error('v_add')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label for="d_add" class="text-black">District <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="d_add"
                                                            name="d_add" value="{{ old('d_add') }}" />
                                                        <span class="text-danger">
                                                            @error('d_add')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="postal_code" class="text-black">Posta / Zip <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="p_code"
                                                            name="p_code" value="{{ old('p_code') }}" />
                                                        <span class="text-danger">
                                                            @error('p_code')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-5">

                                                    <div class="col-md-6">
                                                        <label for="c_phone" class="text-black">Contact no.<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="c_phone"
                                                            name="c_phone" placeholder="Phone Number"
                                                            value="{{ old('c_phone') }}" />
                                                        <span class="text-danger">
                                                            @error('c_phone')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>




                                                {{-- <div class="form-group">
                                <label for="order_note" class="text-black">Order Notes</label>
                                <textarea name="order_note" id="c_order_notes" cols="30" rows="5" class="form-control"
                                    placeholder="Write your notes here..."></textarea>
                            </div> --}}
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>


        <div class="col-md-10 my-5">
            <div class="p-3 p-lg-5 border bg-white">
                <h2 class="h3 mb-3 text-black text-center">Your Order</h2>
                <table class="table site-block-order-table mb-5">
                    <thead>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            // dd($results);
                        @endphp

                        @foreach ($results as $product)
                            @php
                                $total = $total + $product->p_price * $product->quantity;
                            @endphp
                            <tr>
                                <td>
                                    {{ $product->p_name }} <strong class="mx-2">x</strong> {{ $product->quantity }}
                                </td>
                                <td>₹{{ $product->p_price  }} </td>
                                <td>₹{{ $product->p_price * $product->quantity }} </td>
                            </tr>
                        @endforeach




                        <tr>
                            <td class="text-black font-weight-bold">
                                <strong>Cart Total</strong>
                            </td>
                            <td class="text-black"></td>
                            <td class="text-black">₹{{ $total }} </td>
                        </tr>
                        <tr>
                            <td class="text-black font-weight-bold">
                                <strong>Order Total</strong>
                            </td>
                            <td class="text-black"></td>
                            <td class="text-black font-weight-bold">
                                <strong>₹{{ $total }} </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>



                <div class="form-group">
                    <button id="submitb" class="btn btn-success btn-lg py-3 btn-block" onclick="window.location='/payment'">
                        Pay <strong>₹{{ $total }} </strong>
                        
                    </button>
                </div>
            </div>
        </div>





    </div>
    <Script>
        const submitButton = document.getElementById('submitb');
const myForm = document.getElementById('address_form');

submitButton.addEventListener('click', () => {
  myForm.submit();
});

    </Script>
@php
    session(['total'=>$total]);
@endphp
 
@endsection

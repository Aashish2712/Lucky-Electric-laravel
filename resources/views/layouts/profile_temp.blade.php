@extends('layouts._main')
@push('page')
    Product
@endpush
@section('main-section')

<div class="container rounded bg-white my-3 mx-auto">
    <div class="row">
        <div class="col-md-3 ">



            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                <span class="fs-4"> Hello! User name </span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="profile.php" class="nav-link active " aria-current="page">

                        <img class="mx-1" src="images/profile.svg">
                        My profile
                    </a>
                </li>

                <a href="order.php" class="nav-link link-dark">

                    <img class="mx-1" src="images/order.svg">
                    Orders
                </a>
                </li>

                <li>
                    <a href="address.php" class="nav-link link-dark">

                        <img class="mx-1" src="images/address.svg">

                        Address
                    </a>
                </li>
                <li>
                    <a href="payment.php" class="nav-link link-dark">

                        <img class="mx-1" src="images/payment.svg">
                        Payment
                    </a>
                </li>
            </ul>
            <hr>
        </div>



        <div class="col-md-8 ">
            <div class="p-3 py-5">
               
                @yield('content-section')


            </div>
        </div>
    </div>
</div>

@endsection
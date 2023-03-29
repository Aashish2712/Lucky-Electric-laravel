@extends('layouts._main')
@push('page')
   profile
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
                    <a href="profile.php" class="nav-link  @stack('menu') " aria-current="page">

                        <img class="mx-1" src={{asset('img/website/profile.svg')}}>
                        My profile
                    </a>
                </li>

                <a href="/order" class="nav-link  link-dark">

                    <img class="mx-1" src={{asset('img/website/order.svg')}}>
                    Orders
                </a>
                </li>

                <li>
                    <a href="/address" class="nav-link link-dark">

                        <img class="mx-1" src={{asset('img/website/address.svg')}}>

                        Address
                    </a>
                </li>
                <li>
                    <a href="/payment" class="nav-link link-dark">

                        <img class="mx-1" src={{asset('img/website/payment.svg')}}>
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
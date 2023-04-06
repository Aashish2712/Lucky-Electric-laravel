<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/my.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">


    <title>Lucky Electric @stack('page')</title>
</head>

<body>
  
<nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color:#3b5d50;">
    <a class="navbar-brand ml-3 logo" href="/">Lucky Electric <span class="dot"> . </span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        {{-- <li class="nav-item active">
          <a class="nav-link  navcontents" href="/">Back to User Preview <span class="sr-only">(current)</span></a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link navcontents" href="/product"> Manage Products & Categories </a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcontents" href="/product"> Manage Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcontents" href="/product"> Manage Order's & Payments</a>
        </li>
        
       
        {{-- <li class="nav-item dropdown ">
            <a class="nav-link navcontents dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/service">Our services</a>
              <a class="dropdown-item" href="/about">About us</a>
              <a class="dropdown-item" href="/contact">Contact us</a>
              
            </div>
            
        </li>  --}}
        
  
        {{-- <li class="nav-item dropdown">
          <a class="nav-link navcontents"> 
            <img class="" src="{{asset("img/website/user.svg")}}">
           </a>  
           <div class="dropdown-content">
            @if(session()->has('User_name'))
           
            
            <a href="{{url('/logout')}} " > <img src= {{ asset('img/website/login.svg' )}} alt=""><span class="mr-4"> Logout </span>   <Button class="Subtn"> Logout </Button></a>
            <hr>
             @else
             

            <a  href="{{url("/register")}}" ><img src="{{asset("img/website/newcustmer.svg")}}" alt=""><span class="mr-2 pr-2">  New Customer ?  </span>   <Button class="Subtn"> Sign Up</Button>  </a>
            
            <hr>
           <a href="{{url('/login')}} " > <img src= {{ asset('img/website/login.svg' )}} alt=""><span class="mr-1"> Existing Customer</span> <Button class="Subtn"> Login </Button></a>

           <hr>
             @endif
           


             <a href="/profile"> <img class="" src="{{asset('img/website/profile.svg')}}"> Profile</a>
             <hr>
             <a href="/order"> <img class="" src="{{asset('img/website/order.svg')}}"> Order</a>
             <hr>
        </li> --}}
        
        
        {{-- <li><a class="nav-link navcontents" href="/cart"><img src="{{asset('img/website/cart.svg')}}"></a></li>
        
        @if(session()->has('User_name'))
        @if(session('User_email') == "aashu27122001@gmail.com")
        <li class="nav-item">
          <a class="nav-link navcontents" href="/admin">Admin</a>
        </li>

        @endif
        @endif --}}
      </ul>
      <a href="/"><button class="btn btn-warning hv mr-2" type="submit">Back To Website </button></a>
      
      <!-- <button type="button" class="btn btn-outline-warning"></button> -->
    </div>
  </div>
  </nav>

  <nav class="navbar bg-body-tertiary" style="  background-color: #eff2f1;">
    <div class="container-fluid">
    
      {{-- <form class="d-flex" role="search"> --}}
        <div class="input-group">
          {{-- <span class="input-group-text" id="basic-addon1">@</span> --}}
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
        {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
      {{-- </form> --}}
    </div>
  </nav>
<div class="container">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut minus illum omnis voluptas unde blanditiis! Perferendis nesciunt numquam tempora odit, totam nemo minus incidunt dolorum veniam sapiente similique nam praesentium officia animi ipsa. Eaque consequuntur soluta quisquam porro, quas eveniet quasi rerum similique quaerat laboriosam architecto blanditiis quam nulla fugit placeat assumenda odio iusto. Aliquam quis dolorum accusamus pariatur, a ex quae, cumque sequi quos consequuntur sapiente ipsum delectus laudantium doloremque voluptates vitae officiis numquam amet voluptas aspernatur impedit. Porro consequuntur velit eum perferendis eos sequi unde doloremque excepturi itaque hic aut eius veniam perspictas iure doloribus explicabo, dignissimos, soluta cum minima error accusamus quasi quisquam ratione nihil fugit. Tenetur veritatis, nulla sed debitis magni corporis sunt cupiditate? Placeat excepturi voluptatibus enim. Esse magni enim eaque id placeat, non sed architecto in sapiente quae quos omnis aperiam ut fugit eos laborum alias libero? Voluptatum delectus, eum fugiat aut expedita totam magni aliquid fugit consequatur laudantium esse et nemo facere doloremque molestias consequuntur vero! Velit cum numquam optio animi sint dignissimos ad nam libero, ipsum quo laborum temporibus natus, voluptatem consequatur modi ipsam pariatur? Sit corporis soluta voluptatibus, aperiam perspiciatis atque corrupti? Non suscipit, quisquam facere alias nostrum nulla beatae voluptate labore, doloremque molestiae consectetur quo animi voluptatibus magnam distinctio sapiente.</p>
</div>

{{-- 
  <div class="container rounded bg-white my-3 mx-auto">
    <div class="row">
        <div class="col-md-3 ">



            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                <span class="fs-4"> Hello! User name </span>
            </a>
            <hr> --}}
            {{-- <ul class="nav nav-pills flex-column mb-auto">
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
            </ul> --}}
            {{-- <hr>
        </div>



        <div class="col-md-8 ">
            <div class="p-3 py-5">
               
                @yield('content-section')


            </div>
        </div>
    </div>
</div> --}}









  
<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">
      <div class="row g-5 mb-5">
        <div class="col-lg-4">
          <div class="mb-4 footer-logo-wrap">
            <a href="#" class="footer-logo">Lucky electric dasai<span>.</span></a>
          </div>
          <p class="mb-4">
            Main road, near bus stand dasai, district dhar State Madhya pradesh
            Pincode 454441
          </p>
  
          <ul class="list-unstyled custom-social">
            <li>
              <a href="#"><span class="fa fa-brands fa-facebook-f"></span></a>
            </li>
            <li>
              <a href="#"><span class="fa fa-brands fa-twitter"></span></a>
            </li>
            <li>
              <a href="#"><span class="fa fa-brands fa-instagram"></span></a>
            </li>
            <li>
              <a href="#"><span class="fa fa-brands fa-linkedin"></span></a>
            </li>
          </ul>
        </div>
  
        <div class="col-lg-8">
          <div class="row links-wrap">
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <!-- <li><a href="#">Blog</a></li> -->
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
  
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Support</a></li>
                <li><a href="#">Knowledge base</a></li>
                <!-- <li><a href="#">Live chat</a></li> -->
              </ul>
            </div>
  
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <!-- <li><a href="#">Jobs</a></li>
                <li><a href="#">Our team</a></li>
                <li><a href="#">Leadership</a></li> -->
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
  
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <!-- <li><a href="#">Nordic Chair</a></li>
                <li><a href="#">Kruzo Aero</a></li>
                <li><a href="#">Ergonomic Chair</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <div class="border-top copyright">
        <div class="row pt-4">
          <div class="col-lg-6">
            <p class="mb-2 text-center text-lg-start">
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash;
              <a href="https://untree.co"></a>
              <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
  
          <div class="col-lg-6 text-center text-lg-end">
            <ul class="list-unstyled d-inline-flex ms-auto">
              <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Section -->
  

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
-->
</body>

</html>
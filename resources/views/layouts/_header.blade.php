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
        <li class="nav-item active">
          <a class="nav-link  navcontents" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcontents" href="/product">Products</a>
        </li>
        
       
        <li class="nav-item dropdown ">
            <a class="nav-link navcontents dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/service">Our services</a>
              <a class="dropdown-item" href="/about">About us</a>
              <a class="dropdown-item" href="/contact">Contact us</a>
              
            </div>
            
        </li> 
        
  
        <li class="nav-item dropdown">
          <a class="nav-link navcontents"> 
            <img class="" src="{{asset('img/user.svg')}}">
           </a>  
           <div class="dropdown-content">
             <a  href="" ><img src="{{asset('img/newcustmer.svg')}}" alt="">&nbsp; New Customer?   Singup   </a>
             <button type="button" class="btn btn-warning btn-inf  me-2 px-4 d-inline"data-bs-toggle="modal"
             data-bs-target="#signupmodal">signup</button> 
             <hr>
             <a href="#"><img src="{{asset('img/login.svg')}}" alt=""> &nbsp;&nbsp;Existing User Login</a>
             <button type="button"class="btn btn-warning btn-inf me-2 px-4 d-inline"data-bs-toggle="modal" data-bs-target="#loginmodal">login</button>
             <hr>
             <a href="/profile"> <img class="" src="{{asset('img/profile.svg')}}"> Profile</a>
             <hr>
             <a href="/order"> <img class="" src="{{asset('img/order.svg')}}"> Order</a>
             <hr>
        </li>
        
        
        <li><a class="nav-link navcontents" href="/cart"><img src="{{asset('img/cart.svg')}}"></a></li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0 " action="products.php">
        <input class="form-control mr-sm-2 navform  mx-2 my-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning mr-2" type="submit">Search</button>
      </form>
      <!-- <button type="button" class="btn btn-outline-warning"></button> -->
    </div>
  </div>
  </nav>
  
  
@php
    
  @include "singup.php";
  @include "login.php";
@endphp
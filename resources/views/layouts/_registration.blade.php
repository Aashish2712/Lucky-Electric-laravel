@extends('layouts._main')

@section('main-section')


<section class="vh-85 my-5" style=" background-color: #eff2f1;">
 <div class="container-fluid h-custom">
   <div class="row d-flex justify-content-center align-items-center h-100">
     <h1 class="mb-4 text-center display-3 multicolor-head fw-bold">Welcome to Lucky Electric <span class="dot"><strong>.</strong> </span> </h1>
     <div class="col-md-9 col-lg-6 col-xl-5">
       <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
         class="img-fluid" alt="Sample image">
     </div>
  @yield('form-section')
   </div>
 </div>

</section>
@endsection
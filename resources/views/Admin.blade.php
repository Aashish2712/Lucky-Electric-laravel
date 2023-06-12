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
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link navcontents smooth-scroll" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne"> Manage Categories </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navcontents smooth-scroll" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree"> Manage Products </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link navcontents smooth-scroll" data-toggle="collapse" data-target="#collapsefour"
                        aria-expanded="false" aria-controls="collapsefour"> Manage Order's </a>
                </li>


            </ul>
            <a href="/"><button class="btn btn-warning hv mr-2" type="submit">Back To Website </button></a>


        </div>

    </nav>

    {{-- search nav  --}}

    {{-- <nav class="navbar bg-body-tertiary p-0">
        <div class="container-fluid " style="background-color: #03925d;">


            <div class="input-group p-2">

                <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                    aria-describedby="basic-addon1">
                <button class="btn btn-warning" type="submit">Search</button>
            </div>

        </div>
    </nav> --}}


    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link text-decoration-none fw-bold fs-4" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Insert New Category
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    {{-- category section  --}}
                    <div class="container rounded bg-white my-3 py-2 px-3 mx-auto">
                        <h2 class="text-center">Category Section</h2>
                        <div class="my-3  bg-light" id="category">
                            <form action="{{ url('/') }}/category" method="POST">
                                @csrf
                                <div class="mb-3  my-2">
                                    <label for="category_name" class="form-label">Name of Category </label>
                                    <input type="text" class="form-control" name="cat_name" id="cat_name"
                                        aria-describedby="emailHelp">
                                    <span class="text-danger">
                                        @error('cat_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="category_description" class="form-label">Descripition of
                                        Category</label>
                                    <textarea class="form-control" placeholder="Describe About your Category " id="cat_desc" name="cat_desc"
                                        rows="3"></textarea>
                                    <span class="text-danger">
                                        @error('cat_desc')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    {{-- <input type="text-area" class="form-control" id="exampleInputPassword1"> --}}
                                </div>

                                <button type="submit" class="btn btn-primary  my-3">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed text-dark text-decoration-none fw-bold fs-4" type="button"
                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        View Categories
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <table class="table  table-bordered  ">
                        <thead>
                            <tr class="table-danger">
                                <th scope="col">S.no</th>
                                <th scope="col">Category Name </th>
                                <th scope="col">Category Description </th>
                                <th scope="col">Category Status </th>

                            </tr>
                        </thead>

                        <tbody>
                            @php
                                
                                $sno = 1;
                            @endphp
                            @foreach ($categories as $category)
                                <tr class="table-warning">
                                    <th scope="row">{{ $sno }}</th>
                                    <td>{{ $category->cat_name }}</td>
                                    <td class="text-success fw-bold">{{ $category->cat_desc }}</td>
                                    @if ($category->cat_status == '1')
                                        <td class="text-success fw-bold ">
                                            Active
                                        </td>
                                    @else
                                        <td class="text-danger fw-bold ">
                                            Inactive
                                        </td>
                                    @endif



                                </tr>
                                @php
                                    $sno++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-header" id="headingfive">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed text-decoration-none fw-bold fs-4" type="button"
                        data-toggle="collapse" data-target="#collapsefive" aria-expanded="false"
                        aria-controls="collapsefive">
                        Collapsible Group Item #2
                    </button>
                </h2>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div> --}}
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed text-decoration-none fw-bold fs-4" type="button"
                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        Insert New Products
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">


                    <div class="container rounded bg-white my-3 py-2 px-3 mx-auto">
                        <div class="my-3  bg-light" id="skill">
                            <form action="{{ url('/') }}/product" method="POST" enctype="multipart/form-data">
                                <h2 class="text-center">Product Section</h2>
                                @csrf
                                <div class="mb-3  my-2">
                                    <label for="Name" class="form-label">Name of Product </label>
                                    <input type="text" class="form-control" name="Name" id="Name"
                                        aria-describedby="emailHelp">
                                    <span class="text-danger">
                                        @error('Name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="row my-3">
                                    <div class="col">
                                        <input type="text" class="form-control" name="Company"
                                            placeholder="Name of Company of Product">
                                        <span class="text-danger">
                                            @error('Company')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="Price"
                                            placeholder="Price of Product ">
                                        <span class="text-danger">
                                            @error('Price')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col">
                                        <input type="text" class="form-control" name="Model"
                                            placeholder="Model of Product">
                                        <span class="text-danger">
                                            @error('Model')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="Warranty"
                                            placeholder="Warranty of Product ">
                                        <span class="text-danger">
                                            @error('Warranty')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col">
                                        <input type="text" class="form-control" name="Discount"
                                            placeholder="Discount on Product">
                                        <span class="text-danger">
                                            @error('Discount')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col form-group">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Category of
                                            Product</label>

                                        <select name="Category" class="custom-select mr-sm-2"
                                            id="inlineFormCustomSelect">

                                            <option value=""> Category </option>

                                            @foreach ($categories as $category)
                                                <option value={{ $category->cat_id }}>{{ $category->cat_name }}
                                                </option>
                                            @endforeach

                                        </select>
                                        <span class="text-danger">
                                            @error('Category')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                {{-- Images  --}}
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image of product </label>
                                    <input type="file" name="Image1" class="form-control-file"
                                        id="exampleFormControlFile1">
                                    <span class="text-danger">
                                        @error('Image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image of product </label>
                                    <input type="file" name="Image2" class="form-control-file"
                                        id="exampleFormControlFile1">
                                    <span class="text-danger">
                                        @error('Image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                {{-- <div class="form-group">
                    <label for="exampleFormControlFile1">Image of product </label>
                    <input type="file" name="Image3" class="form-control-file" id="exampleFormControlFile1">
                    <span class="text-danger">
                        @error('Image')
                            {{ $message }}
                        @enderror
                    </span>
                </div> --}}



                                <h5>Specification of product </h5>


                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <input type="text" name="Field1" class="form-control"
                                            placeholder="Field">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="Value1" class="form-control"
                                            placeholder="Content">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <input type="text" name="Field2" class="form-control"
                                            placeholder="Field">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="Value2" class="form-control"
                                            placeholder="Content">
                                    </div>
                                </div>


                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <input type="text" name="Field3" class="form-control"
                                            placeholder="Field">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="Value3" class="form-control"
                                            placeholder="Content ">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <input type="text " name="Field4" class="form-control"
                                            placeholder="Field">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="Value4" class="form-control"
                                            placeholder="Content">
                                    </div>
                                </div>





                                <button type="submit" class="btn btn-primary  my-3">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <div class="card">
        <div class="card-header" id="headingfive">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-decoration-none text-dark fw-bold fs-4" type="button"
                    data-toggle="collapse" data-target="#collapsefive" aria-expanded="false"
                    aria-controls="collapsefive">
                    View products
                </button>
            </h2>
        </div>
        <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
            <div class="card-body">
                <div class="card-body">
                    <table class="table  table-bordered  ">
                        <thead>
                            <tr class="table-danger">
                                <th scope="col">S.no</th>
                                <th scope="col">Product Name </th>
                                <th scope="col">Product Description </th>
                                <th scope="col">Product Company </th>
                                <th scope="col">Product Model </th>
                                <th scope="col">Product Price </th>
                                <th scope="col">Product Status </th>
                                <th scope="col">Product Image </th>

                            </tr>
                        </thead>

                        <tbody>
                            @php
                                
                                $sno = 1;
                            @endphp
                            @foreach ($products as $item)
                                @php
                                    
                                    $desc = json_decode($item->p_desc, true);
                                    $img = json_decode($item->p_img, true);
                                @endphp
                                <tr class="table-warning">
                                    <th scope="row">{{ $sno }}</th>
                                    <td class="text-success fw-bold">{{ $item->p_name }}</td>
                                    <td class="text-success fw-bold">
                                        @foreach ($desc as $key => $value)
                                            <div class="container">


                                                <table class="table-borderless custom-table-width">
                                                    <tr class=" mx-2">
                                                        <td class="col-md-4"><span
                                                                class="p_specification">{{ $key }}:</span>
                                                        </td>
                                                        <td class="col-md-6">

                                                            {{ $value }}

                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        @endforeach
                                    </td>

                                    <td class="text-success fw-bold">{{ $item->p_company }}</td>
                                    <td class="text-success fw-bold">{{ $item->p_model }}</td>
                                    <td class="text-success fw-bold">{{ $item->p_price }}</td>
                                    @if ($item->p_status == '1')
                                        <td class="text-success fw-bold ">
                                            Active
                                        </td>
                                    @else
                                        <td class="text-danger fw-bold ">
                                            Inactive
                                        </td>
                                    @endif

                                    <td class="">

                                        <img class="img-fluid product-thumbnail"
                                            src="{{ asset('storage/images/' . basename($img['image1'])) }}"
                                            id="main_product_image" width="350">

                                    </td>
                                </tr>
                                @php
                                    $sno++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>








    <div class="card">
        <div class="card-header" id="headingfour">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-dark text-decoration-none fw-bold fs-4" type="button"
                    data-toggle="collapse" data-target="#collapsefour" aria-expanded="false"
                    aria-controls="collapsefour">
                    View Orders
                </button>
            </h2>
        </div>
        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
            <div class="card-body">
                <div class="section" id="order">
                    <table class="table  table-bordered  ">
                        <thead>
                            <tr class="table-danger">
                                <th scope="col">S.no</th>
                                <th scope="col">Order Id</th>
                                <th scope="col"> Products </th>
                                <th scope="col"> Amount </th>
                                <th scope="col"> Status </th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                
                                $sno = 1;
                            @endphp
                            @foreach ($orders as $entry)
                                <tr class="table-info">
                                    <th scope="row">{{ $sno }}</th>
                                    <td>{{ $entry->od_id }}</td>
                                    <td class="text-success fw-bold">{{ $entry->p_name }}</td>
                                    <td>{{ $entry->amount }}</td>
                                    <td>{{ $entry->status }}</td>

                                    <td><a href="cancel/{{ $entry->p_id }}/{{ $entry->od_id }}"
                                            class="btn btn-danger"> Cancel
                                            Order</a>
                                    </td>
                                </tr>
                                @php
                                    $sno++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>









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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>
-->
</body>

</html>

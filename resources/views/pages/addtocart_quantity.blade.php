<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruby's Flower Shop</title>
    <!-- fontawesome cdn -->
    <script src="{{ url('https://kit.fontawesome.com/d9e4522faa.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "{{ url('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" />
    <!-- custom css -->
    <link rel = "stylesheet" href = "{{ url('css/main.css') }}" />

</head>
<body>
    
    <!-- navbar -->
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-1 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.php">
                <img src = "{{url('/images/rubylogo.png')}}" alt = "site icon">
                <span class = "logoText text-uppercase fw-lighter ms-2">Ruby's Flower Shop</span>
            </a>

            <div class = "order-lg-2 nav-btns px-2">
            <a href="{{ url('/cart') }}">
                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-shopping-cart"></i>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
            </a>
                <b class="userGreet">Hello, {{ Auth::user()->user_fname }} {{ Auth::user()->user_lname}}</b>
                    <a href="{{ url('/sign-out') }}"><button type = "button" class = "btn position-relative">
                        <b class="userGreet">Logout</b>
                    </button>
                </a>

            </div>

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                <li class = "nav-item px-2 py-2 d-flex align-items-center">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ url('/dashboard') }}">home</a>
                    </li>
                    <li class = "nav-item px-2 py-2 d-flex align-items-center">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ url('/dashboard#shop') }}">Shop</a>
                    </li>
                    

                    <li class = "nav-item px-2 py-2 d-flex align-items-center">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ url('/pendingOrders') }}">Orders</a>
                    </li>

                    <li class = "nav-item px-2 py-2 d-flex align-items-center">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ url('/aboutUs') }}">About us</a>
                    </li>

                    <li class = "nav-item px-2 py-2 d-flex align-items-center">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ url('/profile') }}">Profile</a>
                    </li>

                    @if(Auth::user() -> user_level == 0)
                        <li class = "nav-item px-2 py-2 d-flex align-items-center">
                            <a class = "nav-link text-uppercase text-dark" href = "{{ url('/product') }}">products</a>
                        </li>
                                
                         <li class = "nav-item px-2 py-2 d-flex align-items-center">
                            <a class = "nav-link text-uppercase text-dark" href = "customerOrders.php">Customer Pending Orders</a>
                        </li>
                    @endif

                    
                </ul>
            </div>
        </div>
    </nav>

<style>
    #editpopupForm{
        display: block;
    }
</style>





<div class='loginpopup'>
    <div class='formPopup' id='editpopupForm'>
        <form class='formContainer' action='{{ route('addtocart')  }}' method='POST' enctype='multipart/form-data'>
                    @csrf  
                        <div class='form-item'>
                        <input type='number' hidden name='prod_ID' placeholder='Product ID' id='prod_ID' value='{{ $prod_ID }}'>
                        <input type='number' hidden name='user_ID' placeholder='USER ID' id='user_ID' value='{{ Auth::user()->user_ID }}'>
                        </div>
                        <div class='form-item'>
                            <input name='prod_quantity' placeholder='Quantity' id='prod_quantity' type='number' required>
                        </div><p>&nbsp</p>
            <input type ='submit' class='btn btn-primary' value='Add to Cart' name='create'/>
            <a href ='{{url('dashboard')}}'><button type='button' class='openButton btn btn-primnary'>Cancel</button></a>
        </form>

    </div> 
</div>








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
                <img src = "images/rubylogo.png" alt = "site icon">
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

                        <li class = "nav-item px-2 py-2 d-flex align-items-center">
                            <a class = "nav-link text-uppercase text-dark" href = "{{ url('/sales') }}">Sales</a>
                        </li>
                    @endif

                    
                </ul>
            </div>
        </div>
    </nav>

    









    @yield('content')





















<footer class = "bg-dark py-5">
        <div class = "container">
            <div class = "row text-white g-4">
                <div class = "col-md-6 col-lg-3">
                    <a class = "text-uppercase text-decoration-none brand text-white" href = "index.html">BBQ ni BJ</a>
                    <p class = "text-white text-muted mt-3">Founded in 2012 BBQ ni Bj has grown to be the go to online shop for Online shoppers for their BBQ Grill needs. We have a wide range of products and brands ranging from local to International. Providing with quality products is what we do best. We ensure that our products can last through the test of time. Our experts always ensure that we provide not only the latest but also the greatest products you can find on the Market.</p>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light">Links</h5>
                    <ul class = "list-unstyled">
                        <li class = "my-3">
                            <a href = "#header" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#shop" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Shop
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#food" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Food
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "about.html" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> About Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Contact Us</h5>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <span class = "fw-light">
                            Kabankalan City, Negros Occidental, United States of America
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span class = "fw-light">
                            bbqnibj.support@gmail.com
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span class = "fw-light">
                            +69420Secret
                        </span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class = "list-unstyled d-flex">
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->




    <!-- jquery -->
    <script src = "{{ url('js/jquery-3.6.0.js') }}"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "{{ url('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
    <!-- custom js -->
    <script src = "{{ url('js/script.js') }}"></script>
</body>
</html>
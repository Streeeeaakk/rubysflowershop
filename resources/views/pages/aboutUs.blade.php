@extends('pages.layouts.design')

@section('content')
    <!-- about us -->
    <section id = "special" class = "pt-5">
        <div class = "container">
            <div class = "title text-center pt-5">
                <h2 class = "position-relative d-inline-block">About Us</h2>
            </div>

            
        </div>
    </section>
    
    <section id = "about">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <p>Welcome to Ruby's Flower Shop, an online flower shop where you can order beautiful, fresh flowers from the comfort of your own home. We are committed to providing our customers with the best quality flowers and to offer a variety of packages that include cakes, chocolates and teddy bears to make your gift even more special.</p>
                    <p>Our user-friendly website makes it easy to browse our wide selection of flowers and arrangements, from classic roses to different kind of arrangement. You can also customize your order with personalized messages, special requests, and add-ons such as chocolates or balloons.</p>
                    <p>Our team of expert florists will carefully handcraft your order to ensure that it is both beautiful and long-lasting. We take pride in providing exceptional customer service, and we're always happy to answer any questions you may have about our products or services.</p>
                    <p>Whether you're looking to surprise a loved one with a romantic bouquet, celebrate a special occasion with a stunning centerpiece, or simply brighten up your own home with fresh flowers, we're here to help. So why wait? Place your order today and let us help you spread joy and happiness with the beauty of nature! We are pleased to offer delivery within a 70-kilometer radius from Kabankalan City, Negros Occidental ensuring that your package reaches its destination in a timely and efficient manner. We take pride in our ability to deliver packages quickly and efficiently, and we look forward to serving you.</p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "images/rubylogo.png" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>

    <div>
        <p>&nbsp</p>
    </div>
    <div class="aboutcreators text-center">
        <h1>About the Creators</h1>
        <h6>Hover and click on the pictures to see more</h3>
    </div>

    <section id="creators">
        <div class="container-fluid text-center p-3 ">
            <div class="container d-flex justify-content-center">
                <div class="row gap-3 ">
                        <div class="col"></div>
                        <div class="noel col-sm-6 rounded-3"></div>
                        
                        <div class="jul col-sm-6 rounded-3"></div>
                        <div class="jd col-sm-6 rounded-3"></div>
                        <div class="col"></div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- end of about us -->

@endsection
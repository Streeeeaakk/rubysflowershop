@extends('pages.layouts.design')

@section('content')
<header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
    <div class = "container h-100 d-flex align-items-center carousel-inner">
        <div class = "text-center carousel-item active">
            <h2 class = "text-capitalize text-white">best collection</h2>
            <h1 class = "text-uppercase py-2 fw-bold text-white">new arrivals</h1>
            <a href = "#shop" class = "btn mt-3 text-uppercase">shop now</a>
        </div>
        <div class = "text-center carousel-item">
            <h2 class = "text-capitalize text-white">best price & offer</h2>
            <h1 class = "text-uppercase py-2 fw-bold text-white">new season</h1>
            <a href = "#shop" class = "btn mt-3 text-uppercase">buy now</a>
        </div>
    </div>

    <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
        <span class = "carousel-control-prev-icon"></span>
    </button>
    <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
        <span class = "carousel-control-next-icon"></span>
    </button>
</header>
<!-- end of header -->





<!-- collection -->
<section id="disable">
<section id = "shop" class = "pt-5">
    <div class = "container">
        
        <div class = "title text-center">
            <h2 class = "position-relative d-inline-block">Shop Now!</h2>
        </div>

        <div class = "row g-0">
            <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">All</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".flower">Flower Bouquet</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".sunflower">Sunflower Bouquet</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".chocolate">Chocolate Bouquet</button>
                <button type = "button" class = "btn m-2 text-dark" data-filter = ".additionals">Additionals</button>
            </div>

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <!-- tools -->
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 tools">
                        
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productTongs.php';">
                                <img src = "images/Tools/tongs.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            <p class = "text-capitalize mt-3 mb-1">Stainless Steel Kitchen Tongs</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 tools">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='product4Set.php';">
                                <img src = "images/Tools/Set4Tools.jpg" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            <p class = "text-capitalize mt-3 mb-1">BBQ 4-Tool Set</p>
                            <span class = "fw-bold d-block">₱850</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 tools">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productSpatula.php';">
                                <img src = "images/Tools/Spatual.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            <p class = "text-capitalize mt-3 mb-1">FlipFork Spatula</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 tools">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productThermometer.php';">
                                <img src = "images/Tools/Thermo.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            <p class = "text-capitalize mt-3 mb-1">Thermometer</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <!-- grills -->
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 grills">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productGasGrill.php';">
                                <img src = "images/Tools/gas grill.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            <p class = "text-capitalize mt-3 mb-1">Gas Grill</p>
                            <span class = "fw-bold d-block">₱9200</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>


                <div class = "col-md-6 col-lg-4 col-xl-3 p-2 grills">
                    <div class = "collection-img position-relative">
                        <button class="col-btn" onclick=" window.location.href='productCharGrill.php';">
                            <img src = "images/Tools/charcoal grill.png" class = "w-100">
                        </button>
                        
                    </div>
                    <div class = "text-center">
                        
                        <p class = "text-capitalize mt-3 mb-1">Charcoal Grill</p>
                        <span class = "fw-bold d-block">₱45</span>
                        <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 grills">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productPelletGrill.php';">
                                <img src = "images/Tools/pellet grill.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Pellet Grill</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div> 


                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 grills">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productPortableGrill.php';">

                                <img src = "images/Tools/portable grill.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Portable Grill</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>         

                    <!-- foods -->
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 foods">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productPorkBarbeque.php';">
                                <img src = "images/Food/bbq.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Pork Barbeque</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 foods">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productGrilledSteak.php';">
                                <img src = "images/Food/grilled steak.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Grilled Steak</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 foods">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productGrilledPork.php';">
                                <img src = "images/Food/grilled pork.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Grilled Pork</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 foods">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productGrilledFish.php';">
                                <img src = "images/Food/grilled fish.png" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Grilled Fish</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <!-- seasoning -->
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 seasonings">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productBlackPepper.php';">
                                <img src = "images/Seasonings/BlackPepper.jpg" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Black Pepper</p>
                            <span class = "fw-bold d-block">₱50</span>
                            <a href = "l" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 seasonings">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productSoySauce.php';">
                                <img src = "images/Seasonings/Patis.jpg" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Soy Sauce</p>
                            <span class = "fw-bold d-block">₱150</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 seasonings">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productWhitePepper.php';">
                                <img src = "images/Seasonings/WhitePepper.jpg" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">White Pepper</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <!-- accessories -->
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 accessories">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productApron.php';">
                                <img src = "images/Accessories/Apron.jpg" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Apron</p>
                            <span class = "fw-bold d-block">₱150</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 accessories">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productBBQCaddy.php';">
                                <img src = "images/Accessories/BBQ Caddy.jpg" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">BBQ Caddy</p>
                            <span class = "fw-bold d-block">₱1,100</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 accessories">
                        <div class = "collection-img position-relative">
                            <button class="col-btn" onclick=" window.location.href='productGrillingGloves.php';">
                                <img src = "images/Accessories/GrillingGloves.jpg" class = "w-100">
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            
                            <p class = "text-capitalize mt-3 mb-1">Grilling Gloves</p>
                            <span class = "fw-bold d-block">₱45</span>
                            <a href = "" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>
                             
                </div>
            </div>
        </div>
@endsection
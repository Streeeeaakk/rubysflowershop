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

                    @foreach($product as $product)
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 {{ $product->prod_category }}">
                        
                        <div class = "collection-img position-relative">
                                <img src = "images/products/{{ $product->prod_picture }}" 
                                class = "w-100 rounded-5" width='300px' height='300px'>
                            </button>
                            
                        </div>
                        <div class = "text-center">
                            <p class = "text-capitalize mt-3 mb-1">{{ $product->prod_name }}</p>
                            <span class = "fw-bold d-block">₱{{ $product->prod_price }}</span>
                            <a href = "{{ url('addtocart_quantity', $product->prod_ID ) }}" 
                                class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div> 
                    
                    @endforeach
                </div>
            </div>
        </div>
@endsection
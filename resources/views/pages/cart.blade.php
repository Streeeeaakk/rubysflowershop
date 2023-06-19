@extends('pages.layouts.design')

@section('content')



@if(count($carts) > 0)
<!-- Shopping Cart -->
<section id = "special" class = "pt-5">
    <div class = "container">
        <div class = "title text-center pt-5">
            <h2 class = "position-relative d-inline-block">Shopping Cart</h2>
        </div>
        
    </div>
</section>

@if(session('fail'))
    <div class="alert alert-danger">
         {{session('fail')}}
    </div>
@endif


<section id='cart-container' class='container my-5'>
    <table width='100%' class='table table-bordered table-sm align-middle text-center bg-white table-hover'>
        <thead>
            <tr>
                <td></td>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
        
            <form action='{{ url('transaction') }}' method='get'>
            <tr>

                @foreach($carts as $prod)
                    <td>
                        <input type='checkbox' id='cart' name='product[]' value='{{ $prod->prod_ID }}'></td>
                        <td><a href="{{ url('deleteFromCart', $prod->cart_ID) }}"><i class='fas fa-trash-alt'></i></a></td>

                        <td><img src = 'images/products/{{ $prod->prod_picture }}' width='200'  ></td>
                        <td>
                            <h5>{{ $prod->prod_name }}</h5>
                        </td>
                        <td>
                            <h5>₱{{ $prod->prod_price }}.00</h5>
                        </td>
                        <td>
                            <h5>{{ $prod->prod_quantity }}</h5>
                            <a href='{{ url('editQuantity', $prod->cart_ID ) }}' class='btn btn-primary'>Edit Quantity</a>
                        </td>
                        <td>
                            @php
                                $total = $prod->prod_price * $prod->prod_quantity;
                                echo "<h5>₱$total.00</h5>";
                            @endphp
                    </td>
                </tr>
                @endforeach

            <div class='text-center px-2 pb-5'><a href='{{ url('clearCart') }}' class ='btn btn-primary'>Clear Cart</a></div>
            <button type ='submit' class='btn btn-primary'>Place Order</button>
            
            </form> 
            
@else
<div class='text-center align-items-center justify-content-center px-5 py-5'><p>&nbsp</p>
    <p>&nbsp</p>
    <p>&nbsp</p>
        <div class=' align-items-center justify-content-center rounded-5 formContainer'>
            Cart is Empty
        </div>
    </div>
@endif




</tbody>
</table>
</section>

@endsection
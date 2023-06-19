@extends('pages.layouts.design')

@section('content')
    <section id = "special" class = "pt-5">
                    <div class = "container">
                        <div class = "title text-center pt-5">
                            <h2 class = "position-relative d-inline-block">Pending Orders</h2>
                        </div>
                    
                    </div>
    </section>

    @foreach($row_user_order as $row_user_order)
    <section id='cart-container' class='container my-5'>
        <table width='100%' class='table table-bordered table-sm align-middle text-center bg-white table-hover'>
            <thead>
                <tr>
                    <td>Picture</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Mode of Payment</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>

            <tbody>
                <tr>

    @endforeach

@endsection
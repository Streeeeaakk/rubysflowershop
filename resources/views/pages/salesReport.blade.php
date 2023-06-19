@extends('pages.layouts.design')

@section('content')
<p>&nbsp</p>
    <p>&nbsp</p>

    <div class ="openBtn text-center py-3">
        <h3>Sales Report from {{ $fromToTo}}</h3>
       
    </div>
<section id='' class='container my-5'>
    <table  width='100%' class='table table-bordered table-sm align-middle bg-white table-hover'>
        <thead>
            <tr>
                <th>Sold Items</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @php
                    $total = 0;
                    $x = 0;
                    $y = 0;
                @endphp

                @foreach($sales as $sales)
                
                    @php
                        $prod_price = $sales->prod_price;
                        $prod_quantity = $sales->prod_quantity;
                        $total += $prod_price * $prod_quantity;
                        $x += $y+1;
                    @endphp
                    <tr>
                        <td>{{ $sales->prod_name }}</td>
                        <td>₱{{ $sales->prod_price }}</td>
                    </tr>

                @endforeach
            </tr>

            
        </tbody>
    </table>

    
    <section id='cart-container' class='container my-5'>
        <table  width='100%' class='table table-bordered table-sm align-middle text-center bg-white table-hover'>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTotal Sales: </td>
                <td>₱{{ $total }}</td>
            </tr>
            <tr>
                <td>Total number of items sold: </td>
                @php
                    echo "<td>".$x ."</td>";
                @endphp
            </tr>
        </table>
    </section>
</section>
@endsection
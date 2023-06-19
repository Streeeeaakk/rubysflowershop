@extends('pages.layouts.design')

@section('content')
<p>&nbsp</p>
    <p>&nbsp</p>
    
    <div class ="openBtn text-center py-3">
        <h3>Total Sales of All time</h3>
        <br>
        <br>
        <button type="button" class="openButton btn btn-primnary" onclick="openForm()" >
            Generate a Sales Report With a Specific Date
        </button>
</div>
<section id='disable'>
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
                    <td>{{ $sales->prod_price }}</td>
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
</section>



<script>
    function openForm(){
        document.getElementById("popupForm").style.display = "block";

        document.getElementById("disable").style.filter = "brightness(70%)";
        document.getElementById("disable").style.pointerEvents = "none";
    }

    function closeForm(){
        location.reload();
    }

</script>

<link rel = "stylesheet" href = "{{ url('css/profile.css') }}">
<div class="loginpopup">
    <div class="formPopup" id="popupForm">
        <form class="formContainer" id="upload-image" action="{{ route('salesReport') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <p>&nbsp</p>
                                <h4>Generate a Sales Report</h4>
                                <div class="form-item">
                                    <label for="date">From Date:</label>
                                    <input type="date" name="fromDate" id="date" required/>
                                    <br>
                                    <label for="date">To Date:</label>
                                    <input type="date" name="toDate" id="date" required/>
                                </div>

                                <div class="btn-group">
                                        <input type ="submit" class="btn" value="Generate" name="submit" id="submit"/>
                                        <button type="button" class="openButton btn" onclick="closeForm()" >Cancel</button>
                                </div>
            </form>

    </div> 
</div>

@endsection
@extends('pages.layouts.design')

@section('content')

<script>
    function openForm(){
        document.getElementById("popupForm").style.display = "block";

        document.getElementById("disable").style.filter = "brightness(70%)";
        document.getElementById("disable").style.pointerEvents = "none";
    }

    function closeForm(){
        location.reload();
    }

    function price() {
        var x = document.getElementById("payment").value;

        if(x == "gcash"){
            document.getElementById("value").innerHTML = `
            <p>&nbsp</p>
            <h3>Please Transfer to...</h3>
            <h5>BABY CLEAR A. JONG</h5>
            <h5>09168565363</h5>
            `;
        }
        else if(x == "bpi"){
            document.getElementById("value").innerHTML = `
            <p>&nbsp</p>
            <h3>Please Transfer to...</h3>
            <h5>BABY CLEAR A. JONG</h5>
            <h5>1059379476</h5>
            `;
        }
        else if(x == "paypal"){
            document.getElementById("value").innerHTML =`
            <p>&nbsp</p>
            <h3>Please Transfer to...</h3>
            <h5>babyclearjong@gmail.com </h5>
            `;
        }
        else{
            document.getElementById("value").innerHTML = `
            <p>&nbsp</p>
            <h3>Select Option</h3>
            <p>&nbsp</p>
            `;
        }
    }
</script>


<section id = "special" class = "pt-5">
    <div class = "container">
        <div class = "title text-center pt-5">
            <h2 class = "position-relative d-inline-block">You chose the following order(s): <br></h2>
        </div>
        
    </div>
</section>

@foreach($product_from_product as $collection)
    @foreach($collection as $prod)
        <img src = 'images/products/{{ $prod->prod_picture }}' width='200'>
        <h4 class = "position-relative d-inline-block"> {{$prod->prod_name}}</h4><br>     
        
        @php
            $total = $prod->prod_price * $prod->prod_quantity;
            echo '<h4 class = "position-relative d-inline-block"> With a total of = ₱'.$total.'</h4> <br>';
        @endphp
    @endforeach
@endforeach

<div class="loginpopup">
    <div class="formPopup" id="popupForm">
        <form class="formContainer" action="{{ url('addToTmpCart') }}" method="POST" enctype="multipart/form-data">
            @csrf
                        <div class="form-item">
                            <h5>Mode of Payment</h5>

                            <select name="payment" id="payment" onchange="price()"required>
                                <option value = ''>Select Mode of Payment</option>
                                <option value = 'gcash'>Gcash</option>
                                <option value = 'bpi'>BPI Bank Transfer</option>
                                <option value = 'paypal'>Paypal</option>
                            </select>
                            
                            

                            <span id="value"></span>    
                        </div>

                        @php
                        $user_ID = Auth::user()->user_ID;
                        $random = rand();
                    @endphp

                    @foreach($product_from_product as $collection)
                        @foreach($collection as $prod)
                            <input type="text" hidden name="cart_ID[]" value="{{ $prod->cart_ID }}">
                            <input type="hidden" name="prod_ID[]" value="{{ $prod->prod_ID }}">
                            <input type="hidden" name="user_ID[]" value="{{ Auth::user()->user_ID }}">
                            <input type="hidden" name="prod_quantity[]" value="{{ $prod->prod_quantity }}">
                            <input type="hidden" name="tmp_cart_rand[]" value="{{ $random }}">
                        @endforeach
                    @endforeach

                        <p>&nbsp</p>

                                <select class=' text-center' id='address' name='address' required>
                                        <option value =''>Select Address</option>
                                        @foreach ($address as $address)
                                            <option value="{{ $address->address_ID }}">
                                              {{ $address->address_street }}, {{ $address->address_barangay }}, {{ $address->address_city }}
                                            </option>
                                        @endforeach
                                </select>
                                <br>
                                <br>
                        <div class="form-item">
                            <input type="file" name="choosefile" id="choosefile" required/>
                        </div>

                        <div class="btn-group">
                                <input type ="submit" class="btn" value="Save" name="create"/>
                                <button type="button" class="openButton btn" onclick="closeForm()" >Cancel</button>
                        </div>
        </form>

    </div> 
</div>

<button onclick='openForm()'>Place Order</button>
@endsection
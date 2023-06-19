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

    function openEditForm(){
        document.getElementById("edtForm").style.display = "block";
    }

</script>

<p>&nbsp</p>
<p>&nbsp</p>
<div class="loginpopup">
    <div class="formPopup" id="popupForm">
        
        <form class="formContainer" action="{{ url('saveproduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
                        <div class="form-item">
                                <label for="prod_category" class="form-item"> Select Category</label>
                                <select name="prod_category" id="prod_category" required>
                                    <option value="">Select Category...</option>
                                    <option value="flower">Flower Bouquet</option>
                                    <option value="sunflower">Sunflower Bouquet</option>
                                    <option value="chocolate">Chocolate Bouquet</option>
                                    <option value="additionals">Additionals</option>
                                </select>
                        </div>
                            <div class="form-item">
                                <input type="text" name="prod_name" placeholder="Product Name" id="prod_name" required>
                            </div>
                        <div class="form-item">
                            <input name="prod_price" placeholder="Product Price" id="prod_price" type="number" required>
                        </div>

                        <div class="form-item">
                            <input type="file" name="prod_picture" id="prod_picture" required/>
                        </div>
            <input type ="submit" class="btn btn-primary" value="Save Product" name="create"/>
            <button type="button" class="openButton btn btn-primnary" onclick="closeForm()" >Cancel</button>
        </form>
    
    </div> 
</div>

<section id="disable"> 

    <h1 class=" text-center py-3">Products</h1>
    
    <div class ="openBtn text-center py-3">
            <button type="button" class="openButton btn btn-primnary" onclick="openForm()" >
                Add Product
            </button>
    </div>

    <div class="d-flex justify-content-center">
        <div class="formContainer px-5 py-5 rounded-5">
            <table class="table table-bordered table-sm align-middle text-center bg-white table-hover" id="productTable" >
            
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Picture</th>
                    <th scope="col">Product Date Added</th>
                </tr>
            </thead>

            @foreach($product as $product)
            <tr>
                <td>{{ $product->prod_name }}</td>
                <td>{{ $product->prod_category }}</td>
                <td>₱{{ $product->prod_price }}.00</td>
                <td><img src = 'images/products/{{ $product->prod_picture }}' width='200'  ></td>
                <td>{{ $product->created_at }}</td>

                <td>
                <span class='deleteProd'>
                <a href='{{ url('deleteProduct', $product->prod_ID) }}'><button class='btn btn-primary'>Delete</button></a>
                </span>&nbsp&nbsp&nbsp&nbsp&nbsp
                <span class='editProd'>

                <a href=' '><button class='btn btn-primary'>Edit</button></a>
                </span></td>
                
            </tr>
            @endforeach

        </table>
    </div>
</div>

@endsection
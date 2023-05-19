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

</script>

<link rel = "stylesheet" href = "{{ url('css/profile.css') }}">
<div class="loginpopup">
    <div class="formPopup" id="popupForm">
        <form class="formContainer" action="saveprofile.php" method="POST" enctype="multipart/form-data">

        <div class='form-item'>
            <img src='images/profile.png' class='rounded-circle clickable' width='280'>
        </div>

        <p>&nbsp</p>
                        
                        <div class="form-item">
                            <label for="choosefile" class="btn">Select Image</label>
                            <input type="file" hidden name="choosefile" id="choosefile" required/>
                        </div>

                        <div class="btn-group">
                                <input type ="submit" class="btn" value="Save" name="create"/>
                                <button type="button" class="openButton btn" onclick="closeForm()" >Cancel</button>
                        </div>
    </form>

    </div> 
</div>

  <!-- profile -->
  <section id = "special" class = "pt-5">
        <div class = "container">
            <div class = "title text-center pt-5">
                <h2 class = "position-relative d-inline-block">My Account</h2>
            </div>
        </div>
    </section>

    <div class = "row  px-5 py-5 "  id="disable">
        <div class="col-md-4 mt-1">
            <div class="card text-center sidebar">
                <p>&nbsp</p>
                <div class="card-body">

                <img src='images/profile.png' class='rounded-circle clickable' width='280' onclick='openForm()'>

                <div class="mt-3">
                      {{ Auth::user()->user_fname }} {{ Auth::user()->user_lname}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 mt-1">
            <div class="card mb-3 pt-3">
                <div class="px-4 py-3">
                <h1 class="m-3 pt-3">About</h1>
                <div class="row">
                    <div class="col-md-3 px-4">
                        <h5>Full Name</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                        {{ Auth::user()->user_fname }} {{ Auth::user()->user_lname}}
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 px-4">
                            <h5>Birthdate</h5>
                        </div>
                        
                        <div class="col-md text-secondary">
                        {{ Auth::user()->user_birthdate }}
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 px-4">
                            <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            {{ Auth::user()->email }}
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 px-4">
                            <h5>Phone</h5>
                        </div>
                        
                        <div class="col-md text-secondary">
                            {{ Auth::user()->user_phonenumber }}
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 px-4">
                            <h5>Address</h5>
                            
                            <div>
                                <a href="{{ url('/addAddress') }}">
                                    <button class='btnaddress'>Add Address</button>
                                </a>
                            </div>
                        

                            <div class="col-md text-secondary">
                                <select>
                                    @foreach ($address as $address)
                                          
                                    <option value="{{ $address->address_ID }}">
                                        {{ $address->address_street }}, {{ $address->address_barangay }}, {{ $address->address_city }}
                                    </option>
                                        
                                    @endforeach
                                </select>

                                <p></p>
                            </div>
                        </div>

                        
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- end of profile -->
@endsection
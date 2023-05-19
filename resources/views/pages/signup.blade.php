


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create New Account</title>
        <!-- fontawesome cdn -->
        <script src="https://kit.fontawesome.com/d9e4522faa.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- custom css -->
        <link rel = "stylesheet" href = "{{ url('css/style.css') }}">
    </head>
    <body>

        <div class="container">

            <div class="login-left pb-5">
                
                <div class="login-header">
                    <img src="images/LogoWName.png" width="500">
                    <h1>Create New Account</h1>
                    <p></p>
                </div>
                

                
                <form class="login-form" method="POST" action="{{ route('register.custom') }}" >
                @csrf
                        <div class="login-form-content pb-5">

                        <div class="form-item">
                            <label for="email">Email Address</label>

                            <input type="text" name="email" placeholder="Email Address" id="email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-item">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Password" id="password" required>

                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-item">
                            <label for="user_fname">First Name</label>
                            <input type="text" name="user_fname" placeholder="First Name" id="user_fname">

                            @if ($errors->has('user_fname'))
                                <span class="text-danger">{{ $errors->first('user_fname') }}</span>
                            @endif
                        </div>

                        <div class="form-item">
                            <label for="user_lname">Last Name</label>
                            <input type="text" name="user_lname" placeholder="Last Name" id="user_lname">

                            @if ($errors->has('user_lname'))
                                <span class="text-danger">{{ $errors->first('user_lname') }}</span>
                            @endif
                        </div>

                        <div class="form-item">
                            <label for="user_MI">Middle Initial</label>
                            <input type="text" name="user_MI" placeholder="Middle Initial" id="user_MI">

                            @if ($errors->has('user_MI'))
                                <span class="text-danger">{{ $errors->first('user_MI') }}</span>
                            @endif
                        </div>

                        <div class="form-item">
                                <label for="user_gender" class="form-item"> Gender</label>
                                <select name="user_gender" id="user_gender">
                                    <option value="None" selected>Select your gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>

                        </div>
                        <div class="form-item">
                            <label for="user_phonenumber">Mobile Number</label>
                            <input type="text" name="user_phonenumber" placeholder="Mobile Number" id="user_phonenumber">

                            @if ($errors->has('user_phonenumber'))
                                <span class="text-danger">{{ $errors->first('user_phonenumber') }}</span>
                            @endif
                        </div>

                        <div class="form-item mb-3">
                            <label for="user_birthdate">Birthdate</label>
                            <input type="date" id="user_birthdate" name="user_birthdate">
                        </div>


                        <button type ="submit" class="btn btn-primary" value="Signup" name="create">Sign Up</button>

                        </div>
                </form>
                
            </div>

            <div class="login-right">
                <img class="login-right-img" src="images/BBQMan.png">
            </div>
        </div>
    
     <!-- jquery -->
     <script src = "{{ url('js/jquery-3.6.0.js') }}"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "{{ url('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
    <!-- custom js -->
    <script src = "{{ url('js/script.js') }}"></script>
    </body>
</html>
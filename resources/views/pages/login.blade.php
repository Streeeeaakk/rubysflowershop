<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- fontawesome cdn -->
        <script src="https://kit.fontawesome.com/d9e4522faa.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- custom css -->
        <link rel = "stylesheet" href = "{{ url('css/style.css') }}">
    </head>
    <body>
        
        <div class="container">

            <div class="login-left">
                
                <div class="login-header">
                    
                    <h1 class="pb-3" >Account Login</h1>

                </div>
                
                @if (Session::has('success'))
                <div class="alert-error">
                    <i class="fas"></i> {{ Session::get('success') }}
                </div>
                @endif

                
                <form class="login-form" method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="login-form-content">
                            <div class="form-item">
                                <label for="email">Enter Email</label>

                                <input type="text" id="email" name="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif

                            </div>

                            <div class="form-item">
                                <label for="password">Enter Password</label>
                                <input type="password" id="password" name="password">

                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif

                            </div>
                        

                        <div class="form-item">
                            <div class="checkbox">
                                <input type="checkbox" id="rememberMeCheckbox" checked>
                                <label for="rememberMeCheckbox" id="checkboxLabel">Remember Me</label>
                            </div>
                        </div>
                        <button type ="submit" class="btnLogin btn btn-primary"> Login </button>
                    
                
                        <a class="btn btn-primary btnLogin" href ="{{ url('/registration') }}"> Register </a>

                    </div>
                </form>


                
            </div>

            <div class="login-right">
                <div class="d-flex align-items-center">
                    <img class="d-flex justify-content-center px-5" src="images/rubylogo.png" width="100%">
                </div>
                
            </div>
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

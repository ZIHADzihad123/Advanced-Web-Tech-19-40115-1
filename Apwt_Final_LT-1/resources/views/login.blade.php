@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>login</title>
</head>

<body>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('admin_assets/loginform/fonts/icomoon/style.css')}}">

        <link rel="stylesheet" href="{{asset('admin_assets/loginform/css/owl.carousel.min.css')}}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('admin_assets/loginform/css/bootstrap.min.css')}}">

        <!-- Style -->
        <link rel="stylesheet" href="{{asset('admin_assets/loginform/css/style.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Login</title>
    </head>

    <body>



        <div class="content">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('admin_assets/loginform/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-6 contents">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="mb-4">
                                    <h3>Sign In</h3>
                                    <p class="mb-4">please login for better experience</p>
                                </div>
                                <div class="alert ">
                                    {{session('msg')}}
                                </div>
                                <form action="{{route('login.auth')}}" method="post">
                                    @csrf
                                    <div class="form-group first">

                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">


                                    </div>
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                    <br>
                                    <div class="form-group last mb-4">
                                        
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">


                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror



                                    <input type="submit" value="Log In" class="btn btn-block btn-primary">




                                </form>
                                <br>
                                <p style="color: black;">new user?</p>

                                <a style="color:blue " href="/signup"><button class="btn btn-info">Sign Up</button></a>




                            </div>

                        </div>



                    </div>

                </div>

            </div>
        </div>


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>



</body>

</html>
@endsection
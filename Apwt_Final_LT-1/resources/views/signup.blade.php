<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="{{asset('admin_assets/signupform/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/signupform/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('admin_assets/signupform/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/signupform/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin_assets/signupform/css/main.css')}}" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-30 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form action="{{route('signup')}}" method="POST">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="firstname">
                                    @error('firstname')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lastname">
                                    @error('lastname')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="email">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">password</label>
                                    <input class="input--style-4" type="text" name="password">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>

                        </div>
                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                    @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Usertype</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="usertype">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>customer</option>
                                            <option>admin</option>
                                            <option>manager</option>
                                            <option>deliveryman</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                        @error('usertype')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="p-t-15">
                            <div class="input-group">
                                <label class="label">Address</label>
                                <input class="input--style-4" type="text" name="address">
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>


                        </div>
                        <br>
                        <div class="row">
                            <div class="col"><button class="btn btn--radius-2 btn--blue" type="submit">Submit</button></div>
                            <div class="col">
                                <div class="alert ">
                                    {{session('msg')}}
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        
        <button style="margin-left: 570PX;" type=" button" class="btn btn-info btn btn--radius-2 mt-2"><a class="nav-link" href="{{route('login')}}">
                Go back
            </a></button>


        </button>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('admin_assets/signupform/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('admin_assets/signupform/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin_assets/signupform/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin_assets/signupform/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('admin_assets/signupform/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<!-- end document-->
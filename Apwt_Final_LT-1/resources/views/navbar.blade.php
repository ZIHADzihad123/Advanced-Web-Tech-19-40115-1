<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Navbar</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">Restaurent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button type="button" class="btn btn-info">
                            <a class="nav-link" href="{{route('index')}}">
                                Home
                            </a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-info">
                            <a class="nav-link" href="{{route('login')}}">
                                Login
                            </a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-info">
                            <a class="nav-link" href="{{route('signup')}}">
                                Signup
                            </a>
                        </button>
                    </li>
                    <li class="nav-item">

                        <div class="dropdown mt-2 col-lg-12">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{Session::get('email')}}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{route('admindash')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>

                            </ul>
                        </div>


                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>admin</title>
</head>

<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-center bg-info " style="width: 18rem; height:18rem;">
                        <div class="card-body mt-3 ">
                            <h3 class="card-title">Manage Users</h3>
                            <br>
                            <p class="card-text">update delete users info</p>
                            <a href="{{route('userscrud')}}" class="btn btn-primary">Click Here</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center bg-info " style="width: 18rem; height:18rem;">
                        <div class="card-body mt-3 ">
                            <h3 class="card-title">Manage product</h3>
                            <br>
                            <p class="card-text">update delete products info</p>
                            <a href="{{route('product')}}" class="btn btn-primary">Click Here</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center bg-info " style="width: 18rem; height:18rem;">
                        <div class="card-body mt-3 ">
                            <h3 class="card-title">Manage Salary</h3>
                            <br>
                            <p class="card-text">update delete users info</p>
                            <a href="" class="btn btn-primary">Click Here</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <br> <br> <br>

    <section>
        
    </section>

</body>

</html>
@endsection
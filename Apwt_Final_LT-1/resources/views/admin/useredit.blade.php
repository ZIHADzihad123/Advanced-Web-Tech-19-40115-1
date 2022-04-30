@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="card col-lg-6 mt-5 ">
            <div class="card-body ">

                <form action="" method="post">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">firstame</label>
                        <input type="text" class="form-control" name="firstname" value="{{$clients->firstname}}">

                    </div>

                    <div class="mb-3">
                        <label for="Email1" class="form-label">lastname</label>
                        <input type="text" class="form-control" name="lastname" value="{{$clients->lastname}}">

                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">email</label>
                        <input type="email" class="form-control" name="email" value="{{$clients->email}}">

                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">password</label>
                        <input type="text" class="form-control" name="password" value="{{$clients->password}}">

                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$clients->phone}}">

                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">usertype</label>
                        <input type="text" class="form-control" name="usertype" value="{{$clients->usertype}}">

                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">address</label>
                        <input type="text" class="form-control" name="address" value="{{$clients->address}}">

                    </div>



                    <button type="Update" class="btn btn-primary ">Submit</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
@endsection
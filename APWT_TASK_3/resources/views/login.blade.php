@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="card col-lg-6 mt-5 ">
            <div class="card-body ">

                <form action="{{route('login.post')}}" method="post">
                    {{csrf_field()}}

                    <div class="mb-3">
                        <label for="Email1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" name="password">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="alert ">
                        {{session('msg')}}
                    </div>



                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>

@endsection
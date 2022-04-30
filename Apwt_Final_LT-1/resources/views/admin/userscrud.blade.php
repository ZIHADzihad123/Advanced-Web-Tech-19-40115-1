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
    <br><br>
    <div class="container">
        <table class="table table-info table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">firstame</th>
                    <th scope="col">lastname</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">phone</th>
                    <th scope="col">usertype</th>
                    <th scope="col">address</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $cli)
                <tr>
                    <td>{{$cli->id}}</th>
                    <td>{{$cli->firstname}}</td>
                    <td>{{$cli->lastname}}</td>
                    <td>{{$cli->email}}</td>
                    <td>{{$cli->password}}</td>
                    <td>{{$cli->phone}}</td>
                    <td>{{$cli->usertype}}</td>
                    <td>{{$cli->address}}</td>


                    <td>
                        <a href="{{url('/edit',$cli->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <br>
                        <a href="{{url('/delete',$cli->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
@endsection
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
    <br> <br>
    <a style="margin-left: 600px;" href="{{url('/addproduct')}}" class="btn btn-info btn-sm">add</a>
    <br><br>


    <div class="container">
        <table class="table table-info table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">price</th>
                    <th scope="col">operation</th>

                </tr>
            </thead>
            <tbody>
                @foreach($clients as $pro)
                <tr>
                    <td>{{$pro->id}}</th>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->image}}</td>
                    <td>{{$pro->price}}</td>


                    <td>
                        
                        <a href="{{url('/deleteproduct',$pro->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
@endsection
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
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Dob</th>
                    <th scope="col">usertype</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $stu)
                <tr>
                    <td>{{$stu->id}}</th>
                    <td>{{$stu->name}}</td>
                    <td>{{$stu->email}}</td>
                    <td>{{$stu->password}}</td>
                    <td>{{$stu->dob}}</td>
                    <td>{{$stu->usertype}}</td>
                    <td>
                        <a href="{{url('/edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

@endsection
@extends('layouts.app')
@section('content')
<form action="{{route('registration')}}" method="post">

{{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	<input type="text" name="name" placeholder="Name">
	@error('name')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>
  <input type="password" name="password" placeholder="Password">
	@error('password')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>
  <input type="text" name="address" placeholder="Address">
	@error('address')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>
  <input type="text" name="phone" placeholder="Phone">
	@error('phone')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>
  <input type="text" name="email" placeholder="Email">
	@error('email')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>

	<input type="checkbox" name="remember"> Remember Me<br>
	<input type="submit" name="" value="Login">
</form>
@endsection 
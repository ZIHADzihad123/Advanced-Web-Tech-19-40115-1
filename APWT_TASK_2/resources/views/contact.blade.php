@extends('layouts.app')
@section('content')
<form action="{{route('contact')}}" method="post">

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
  <input type="text" name="email" placeholder="Email">
	@error('email')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>
  <input type="text" name="phone" placeholder="Phone">
	@error('phone')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>
  <input type="text" name="subject" placeholder="Subject">
	@error('subject')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>
  <input type="text" name="message" placeholder="Message">
	@error('message')
            <span class="text-danger">{{$message}}</span>
  @enderror
	<br>
	
	<input type="submit" name="" value="Send">
</form>
@endsection 
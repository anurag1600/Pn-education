
@extends("front.master")

@section("title",'Home | PN Education')


@section("content")


<h1>PN Education</h1>

<form method="post" action="{{url('front/login_save')}}">
  @csrf

 

  Email:<input type="text" name="email" placeholder="Enter your email">
<br>

  Password:<input type="Password" name="Password" placeholder="Enter your Password">
<br>

<input type="submit" name="submit">

</form>


@endsection



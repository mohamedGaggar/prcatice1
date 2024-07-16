@extends('users.layout')

@section('title')
<title>Registration Page</title>
@endsection

@section('content')
<div style="display:flex;margin-left:500px;margin-top:100px;height:200px">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZwomT5R6EQmldphyIjZFrSXtAnXV__u4aMb_3QCuyDh1-5YF6hy4Hyj-gl11UXfPW8Nw&usqp=CAU" alt="" style="border-radius: 30px;height:100px">
    <h1 style="font-size:80px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;margin-left:20px"><span style="color:lightslategrey">R</span>egis<span style="color:brown">t</span>er <span style="color:darkturquoise">N</span>ow</h1>
</div>

<div>
   @if (Session::has('success'))
   <p class="alert alert-success" style="background-color:cornflowerblue;width:400px;margin-left:530px;text-align:center">{{Session::get('success')}}</p>

<div>
<a href="{{route('login')}}" class="btn btn-outline-dark" role="button" style="margin-left:650px;width:150px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Login Now</a>
</div>

   @endif


</div>
<section style="width: 700px;border:1px solid brown;border-radius:30px;height:450px;margin-left:400px;margin-top:60px">
    <div style="width:600px;margin-left:30px;margin-top:80px">
        <form action="{{ route('users.register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" style="border-color:cornflowerblue" name="name">
                <div class="form-text">
                    @error('name')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>

            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" style="border-color:darkgoldenrod" name="email">
                <div id="emailHelp" class="form-text">
                    @error('email')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" style="border-color:lightslategrey" name="password">

                <div class="form-text">
                    @error('password')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-dark" style="margin-top: 30px;margin-left:200px;width:150px;height:60px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">REGISTER NOW</button>
        </form>
    </div>
</section>
@endsection

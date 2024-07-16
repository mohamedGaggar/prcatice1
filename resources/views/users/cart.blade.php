@extends('users.layout')

@section('title')
<title>Cart Page</title>

@endsection


@section('content')










<section style="width: 100%; border: 1px solid brown; display: flex; position: fixed; justify-content: space-around; z-index: 1000; align-items: center;">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="width: 100%;">
  <div class="container-fluid">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZwomT5R6EQmldphyIjZFrSXtAnXV__u4aMb_3QCuyDh1-5YF6hy4Hyj-gl11UXfPW8Nw&usqp=CAU" alt="" style="border-radius: 30px; height: 75px; margin-left: 10px; margin-right: 10px; width: 75px;">
    <h1 class="navbar-brand" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 30px;">
      <span style="color: brown;">E</span><span style="color: grey;">G</span><span style="color: aquamarine;">Y</span>
      <span style="color: brown;">C</span><span style="color: grey;">o</span><span style="color: cadetblue;">u</span><span style="color: brown;">r</span><span style="color: aquamarine;">s</span><span style="color: brown;">e</span><span style="color: grey;">s</span>
    </h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</section>




<!-- end of navbar -->


<h1><span style="color:brown">Y</span><span style="color:grey">o</span><span style="color:aqua">u</span><span style="color: brown;">r</span> <span style="color:aqua">c</span><span style="color:brown">o</span><span style="color:grey">u</span><span style="color:aqua">r</span><span style="color:brown">s</span><span style="color:grey">e</span><span style="color: aqua;">s</span></h1>

<div class="container text-center">
  <div class="row" style="display: flex;">
    @foreach ($courses as $course)
    <div class="col-md-4" style="margin-top: 70px;width:300px">
      <form action="{{route('cart.create')}}" method="post" enctype="multipart/form-data">
@csrf
        <section>
          <div class="card" style="width: 100%; border-color: coral; border-radius: 20px;">
            <img src="{{ asset($course->attachment) }}" class="card-img-top" alt="..." style="border-top-right-radius: 18px; border-top-left-radius: 18px; width: 100%; height: 150px;">
            <div class="card-body">
              <h5 class="card-title" style="color: black; text-align: center; text-shadow: 1px 1px 0 aqua;">{{ $course->title }}</h5>
              <p class="card-text" style="color: black; text-align: center; text-shadow: 1px 1px 0 gray;">{{ $course->price }}</p>



              <input type="hidden" name="attachment" value="{{$course->attachment}}">

<input type="hidden" name="title" value="{{$course->title}}">
<input type="hidden" name="price" value="{{$course->price}}">
              <input type="hidden" name="url" value="{{ $course->url }}">



              <button class="btn btn-outline-dark" style="text-shadow: 1px 1px 0 aqua;" type="submit">Enroll now</button>
            </div>
          </div>
        </section>
      </form>
    </div>
    @endforeach
  </div>
</div>





@endsection

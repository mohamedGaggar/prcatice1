@extends('users.layout')





@section('title')
<title>Profile Page</title>
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('carts')}}">cart</a>
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
<h1 style="font-size: 70px;">gdsfgsdfgsdfgsdfgsdfgsdfgfdgdfgsdf</h1>
@foreach ($data as $item )

<p>{{$item->title}}</p>

<p>{{$item->url}}</p>
@endforeach



@endsection

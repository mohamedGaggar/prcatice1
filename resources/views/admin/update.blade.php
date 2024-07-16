<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>







  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">lab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('admin.adminPage')}}">Creation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.updateTable')}}">DATA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- end of navbar -->


<div style="width:500px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;margin-left:300px;margin-top:50px">


      @if (Session::has('success'))

      <p class="alert alert-success">{{Session::get('success')}}</p>




      @endif


      @if (!Session::has('success'))
      <p class="alert alert-danger">something went wrong</p>

      @endif
</div>


<section style="width: 600px;margin-left:300px;margin-top:50px">
    @php
    $action=!empty($courses) ? '/admin/'.$courses->id.'/update/':'/admin/update';
    @endphp
<form action="{{$action}}" method="post" enctype="multipart/form-data">
    @csrf
@method('put')

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Image</label>
    <input type="file" class="form-control" style="background-color:coral;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" name="attachment">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="title" class="form-label" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Title</label>
    <input type="text" class="form-control" style="border-color: coral;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" name="title">
  </div>



  <div class="mb-3">
    <label for="title" class="form-label" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Price</label>
    <input type="text" class="form-control" style="border-color:coral;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" name="price">
  </div>


  <div class="mb-3">
    <label for="title" class="form-label" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">url</label>
    <input type="text" class="form-control" style="border-color: coral;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" name="url">
  </div>


  </div>
  <button type="submit" class="btn btn-success">Submit</button>






</form>
</section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

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


<section style="margin-top: 250px;margin-left:100px;width:800px">

<table class="table" style="border-color:coral;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
  <thead>
    <tr>
      <th scope="col" style="color:green">ID</th>
      <th scope="col" style="color:green">Title</th>
      <th scope="col">Attachment</th>
      <th scope="col">Price</th>
      <th scope="col">URL</th>
      <th scope="col">update</th>
      <th scope="col">Delete</th>
    </tr>


    </tr>
  </thead>
  @foreach ($courses as $course )


  <tbody>
    <tr>
      <th scope="row">{{$course->id}}</th>
      <td>{{$course->title}}</td>
      <td>{{$course->attachemnt}}</td>
      <td>{{$course->price}}</td>
      <td>{{$course->url}}</td>


          <td><a class="btn btn-success" href="/admin/{{$course->id}}/update">UPDATE</a></td>
          <td><a class="btn btn-dark" href="/admin/{{$course->id}}/delete">DELETE</a></td>

    </tr>

</tbody>

@endforeach
</table>
</section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

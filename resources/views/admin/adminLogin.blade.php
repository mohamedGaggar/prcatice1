<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div style="display:flex;margin-top:60px;margin-left:250px;margin-bottom:100px">
        <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjLedytz4N_SlJZkNo58bqIeSK-zpKyTGBgQ&s" style="border-radius: 55%;width:150px;">
    <h1 style="color:green;font-size:60px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;margin-left:20px">backend control</h1>
    </div>

<!-- end of headline section  -->

<section style="width: 600px;margin-left:400px">


<form action="{{route('admin.adminLogin')}}" method="post">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="font-size: 22px;">Admin</label>
    <input type="email" class="form-control  @error('adminEmail') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="adminEmail" style="border-color:green">
    <div id="emailHelp" class="form-text">

    @error('adminEmail')

    <p>{{$message}}</p>
    @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="font-size: 22px;">Admin password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" style="border-color:green">


    <div class="form-text">
@error('password')
<p>{{$message}}</p>
@enderror
    </div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" style="border-color:coral">
    <label class="form-check-label" for="exampleCheck1" style="font-family:'Times New Roman', Times, serif">save login</label>
  </div>

  <button type="submit" class="btn btn-dark" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Admin Login</button>
</form>

</section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

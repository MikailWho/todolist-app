<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
   

  </head>
 
  <body class="text-center">
    
    <main class="form-signin d-flex justify-content-center align-items-center min-vh-100">
      <form method="POST" action="/login" class="w-50">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
        <div class="form-floating">
          <input type="text" class="form-control" name="username" placeholder="name@example.com">
          <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <button class="w-20 btn btn-lg btn-primary mt-5" type="submit">Sign in</button>
        <button class="w-20 btn btn-lg btn-secondary mt-5" type="button" onclick="window.location.href='{{ url('/') }}'">Back</button>
        <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
        
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>


</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist App</title>
</head>
<body>
<div class="col-md-3 text-end">
        @if (session()->get('username')==null)
      <button type="button" class="btn btn-primary"onclick="window.location='{{ url('/login') }}'">Login</button>
        
      @endif
      </div>
    @yield("content")
</body>
</html>
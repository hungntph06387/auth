<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row" style="margin-top:45px; margin-left:405px">
                <div class="col-md-4 col-md-offset-4">
                   <h4>Login Form</h4><br/>
                   @if(Session::get('fail'))
                   <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                   </div>
                   @endif
                   <form action="checkLogin" method="post">
                   @csrf
                       <div class="form-group">
                           <label for="">Email</label>
                           <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                           <p style="color: red;">@error('email'){{$message}}@enderror</p>
                       </div>
                       <div class="form-group">
                           <label for="">Password</label>
                           <input type="password" class="form-control" name="password" placeholder="Enter  password">
                           <p style="color: red;">@error('password'){{$message}}@enderror</p>
                       </div>
                       <button type="submit" class="btn btn-primary">Sign In</button>
                   </form>
                </div> 
         </div>
    </div>
</body>
</html>
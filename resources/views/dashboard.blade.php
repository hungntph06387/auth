<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h3>Profile</h3>
    <br>
    <h4>Welcome {{$user->name}} !</h4>
    <h5>{{$user->email}}</h5>
    <h5>{{$user->role}}</h5>

    <a href="/newProduct">Create Product</a>

    <br>
    <a href="/logout">logout</a>
</body>
</html>
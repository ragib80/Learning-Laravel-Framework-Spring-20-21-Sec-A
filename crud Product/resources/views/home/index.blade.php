<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <a class="btn btn-info" href="/home"> Home</a> |
    <a class="btn btn-danger" href="/logout"> Logout </a>
    <div>{{session('msg')}}</div>
    <h1>Welcome home, {{session('uname')}}</h1>
   
    <a class="btn btn-primary" href="{{route('user.index')}}"> User List </a> |
    <a  class="btn btn-secondary" href="/product/index"> Product Index </a> |
    <a class="btn btn-danger"  href="/logout"> Logout </a>
</body>


</html>

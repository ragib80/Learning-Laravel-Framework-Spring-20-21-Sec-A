<!DOCTYPE html>
<html>
<head>
    <title>User Index</title>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div id="main-content" class="main">
    <br><h2>All Users</h2>
     <div >
     <a class="btn btn-info" href="/home"> Back</a> |
    <a class="btn btn-danger" href="/logout"> Logout </a>
    <h3>User List</h3>
     
     <a class="btn btn-info" href="/user/create">Create New</a> 
     	
     </div><br>
      

   
    <table cellpadding="7px" class="table table-striped">
    <tr class="table-info">
    <td> ID </td>
            <td> Name </td>
            <td> Email </td>
            <td> Type </td>
            <td> Action </td>
        </tr>
       

        @foreach ($userList as $user)
        <tr>

            <td>{{$user->id}}</td>
            <td>{{$user->full_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->type}}</td>



            <td>


                <a  class="btn btn-info" href="{{route('user.details', ['id' => $user->id])}}"> Details </a> |
                <a  class="btn btn-info" href="{{route('user.edit', ['id' => $user->id])}}"> Edit </a> |
                <a class="btn btn-danger" href="{{route('user.delete', ['id' => $user->id])}}"> Delete </a> |
            </td>
        </tr>
        @endforeach
    </table>
      
</div>
</div>

</body>
</html>




<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>

<body>
    <a href="/home"> Back</a> |
    <a href="/logout"> Logout </a>
    <h3>User List</h3>

    <table border="1">
        <tr>
            <td> ID </td>
            <td> Name </td>
            <td> Email </td>
            <td> Type </td>
            <td> Action </td>
        </tr>

        @foreach ($userList as $user)
        <tr>

            <td>{{$user->id}}</td>
            <td>{{$user->full_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->type}}</td>



            <td>


                <a href="{{route('user.details', ['id' => $user->id])}}"> Details </a> |
                <a href="{{route('user.edit', ['id' => $user->id])}}"> Edit </a> |
                <a href="{{route('user.delete', ['id' => $user->id])}}"> Delete </a> |
            </td>
        </tr>
        @endforeach

    </table>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
   
     <a href="/user/list">Back</a> |
	<a href="/logout"> Logout </a> <br> <br>
	
	<table border="1">
	<tr>
			<td>Id</td>
			<td>{{$user['id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$user['name']}}</td>
		</tr>
		
        <tr>
			<td>Email</td>
			<td>{{$user['email']}}</td>
		</tr>
       
	</table>

	
</body>
</html>
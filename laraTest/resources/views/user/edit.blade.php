<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

    <a href="/user/list">Back</a> |
	<a href="/logout"> Logout </a> <br> <br>

	<form method="post">
	<table>
	<tr>
			<td>Id</td>
			<td><input type="text" name="id" value="{{$user['id']}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="uname" value="{{$user['name']}}"></td>
		</tr>
		<!--<tr>
			<td>Password</td>
			<td><input type="password" name="password" ></td>
		</tr>-->
        <tr>
			<td>Email</td>
			<td><input type="email" name="email" value="{{$user['email']}}"></td>
		</tr>
        <tr>
			<td>Type</td>
			<td><input type="text" name="type" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Update"></td>
		</tr>
	</table>
	</form>
	
</body>
</html>

<!--<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	
	<table>
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
			<td><td>{{$user['email']}}</td></td>
		</tr>
       
	</table>

	
</body>
</html>-->
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
    <a href="/user/list">Back</a> |
	<a href="/logout"> Logout </a> 

	<form method="post">
	<table>
	<tr>
			<td>Id</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
        <tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
        <tr>
			<td>Type</td>
			<td><input type="text" name="type"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Add"></td>
		</tr>
	</table>
	</form>
	
</body>
</html>
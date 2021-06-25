<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>

    <a href="/home"> Back</a> |
    <a href="/logout"> Logout </a>

    <h2>Create New Product</h2>

    <form method="post">
        @csrf
        <table>

            <tr>
                <td>Product name</td>
                <td><input type="text" name="productname"></td>
            </tr>
            <tr>
                <td>Buying Price</td>
                <td><input type="text" name="buying_Price"></td>
            </tr>
            <tr>
                <td>Selling Price</td>
                <td><input type="text" name="selling_Price"></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>

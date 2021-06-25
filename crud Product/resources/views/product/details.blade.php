<!DOCTYPE html>
<html>

<head>
<title>Product Index</title>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Details Page</title>
</head>

<body>
    <h1>Product Details </h1>
    <table cellpadding="7px" class="table table-striped">
    <tr class="table-info">
            <td> ID </td>
            <td> Name </td>
            <td>Buying Price </td>
            <td> Selling Price </td>
            
            
        </tr>

       
        <tr>

            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->buying_Price}}</td>
            <td>{{$product->selling_Price}}</td>
           
  
        </tr>
        
    </table>
    <a class="btn btn-info" href="/home">Home</a>
</body>



</html>

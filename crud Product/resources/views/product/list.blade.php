<!DOCTYPE html>
<html>
<head>
    <title>Product Index</title>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div id="main-content" class="main">
    <br><h2>All Products</h2>
     <div >
     <a class="btn btn-info" href="/home"> Back</a> |
    <a class="btn btn-danger" href="/logout"> Logout </a>
    <h3>Product List</h3>
     
     <a class="btn btn-info" href="/product/create">Create New</a> 
     	
     </div><br>
      

   
    <table cellpadding="7px" class="table table-striped">
    <tr class="table-info">
            <td> ID </td>
            <td> Name </td>
            <td>Buying Price </td>
            <td> Selling Price </td>
            
            <td> Action </td>
        </tr>

        @foreach ($productList as $product)
        <tr>

            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->buying_Price}}</td>
            <td>{{$product->selling_Price}}</td>
           
    <td>

                
                <a class="btn btn-info" href="/product/details/{{$product['id']}}"> Details </a> |
                <a  class="btn btn-info" href="/product/edit/{{$product['id']}}"> Edit </a> |
                <a class="btn btn-danger" href="/product/delete/{{$product['id']}}"> Delete </a> |
            </td>
        </tr>
        @endforeach
    </table>
      
</div>
</div>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<div id="main-content" class="main">
    <br><h2>Edit Product</h2> <hr>
    <a href="/home"> Back</a> |
    <a href="/logout"> Logout </a>
  
    <div class="main">
    <form class="post-form"  method="post">
    @csrf
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Name</label>
          <input type="hidden" name="id" value="{{$product['id']}}"/>
          <input type="text" name="productname" value="{{$product['name']}}">
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Buying Price</label>
          <input type="text" name="buying_Price" value="{{$product['buying_Price']}}"/>
      </div>
      
      <div class="form-group">
          <label class="col-sm-2 col-form-label">Selling Price</label>
          <input type="text" name="selling_Price" value="{{$product['selling_Price']}}"/>
      </div>
      <input class="btn btn-outline-primary" type="submit" name="Submit" value="Save">
    </form>
    
    </div>
</div>
</div>
<br>

</body>
</html>



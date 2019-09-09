<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Webuy Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .container {
    padding: 80px 120px;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/checksession') }}">WebuyCart</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/checksession') }}">Home</a></li>
      <li class="active"><a href="{{ url('/getproducts') }}" >Products</a></li>
      <li><a href="{{ url('/cart') }}">Cart</a></li>         
    </ul>
    <li>
        <a href="{{ url('/logout') }}" class="pull-right" style="padding-top:10px;padding-bottom:10px">Logout</a>
</li>    
  </div>
</nav>
  

<div class="container text-center">
  <div class="row"> 
 @yield('content')     
  </div>
</div>

</body>
</html>

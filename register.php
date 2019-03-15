<html lang="en">
<head>
  <title>Bird Identification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bird Identification</a>
    </div>
  </div>
</nav>
<br><br><br><br><br>
<center>


<form action="register.php" method="post">
<input type="text" name="name" style="width:400px" class="form-control" placeholder="UserName">
<br>
<input type="text" name="dob" style="width:400px" class="form-control" placeholder="DOB">
<br>
<input type="password" name="password" style="width:400px" class="form-control" placeholder="Password">
<br>
<input type="text" name="phone" style="width:400px" class="form-control" placeholder="Phone">
<br>
<select name="gen" style="width:400px" class="form-control" placeholder="Gender">
<option  class="form-control">Male</option>
<option class="form-control">Female</option>
</select>
<br>
<button type="submit" class="btn btn-default">Sign-Up</button>
</form>



</center>
</body>
</html>



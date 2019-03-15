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
 

<style type="text/css">
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}

.post {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
}

.post:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.paste {
  padding: 10px 16px;
  background: white;
  position: absolute;
  top:22%;
  left:53%;
  width:47%;
  height: 90%;

  
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

textarea {
   resize: none;
}

</style>

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
      <a class="navbar-brand" href="#">Bird Identificatin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="position:absolute;left:70%">
        <li class="active"><a href="login.php">Login <span class="sr-only">(current)</span></a></li>
        <li><a href="register.php">Register</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome : Username <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!--<li><a href="#">Following</a></li>
            <li><a href="#">Post A Recipe</a></li>
            <li><a href="#">Followers</a></li>-->
            <li role="separator" class="divider"></li>
            <li><a href="#">About</a></li>
            <li role="separator" class="divider"></li>
            <li></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group" style="position:absolute;left:20%">
          <input type="text" style="width:400px" class="form-control" placeholder="Search">
          <button type="submit" class="btn btn-default">Search</button>
        </div>
        
      </form>

      <!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>-->


    </div>
  </div>
</nav>

<div style="position:absolute;left:2%;width:50%;height:100%;">



<div style="position:relative;top:20%;width:100%">
<div class="card" style="width:100%">
  <h3>Bird Name</h3>
  <hr>
  <img src="img_avatar2.png" alt="Bird image " style="width:100%">
  <div class="container" style="width:100%">
    <h4><b>Bird Specie</b></h4> 
    <p>  Parrots, also known as psittacines /ˈsɪtəsaɪnz/,[1][2] are birds of the roughly 393 species in 92 genera that make up the order Psittaciformes, found in most tropical and subtropical regions. The order is subdivided into three superfamilies: the Psittacoidea ("true" parrots), the Cacatuoidea (cockatoos), and the Strigopoidea (New Zealand parrots). Parrots have a generally pantropical distribution with several species inhabiting temperate regions in the Southern Hemisphere, as well. The greatest diversity of parrots is in South America and Australasia.   </p> 
  </div>
</div>
  </div>



  
</div>

<!-- POstingmy own recipe -->
<div class="paste" id="myHeader">
<div class="post" style="width:100%;height:90%">
  <br>
  <h3 style="white-space:pre;">   Upload Bird image</h3>
  <hr>
  <form>
  <input type="text" style="width:100%" class="form-control" placeholder="Bird Name">
  <br>
   <!-- <div class="form-group">
      <label for="desc" style="white-space:pre;">   Detailed Description:</label>
      <textarea class="form-control" rows="5" id="desc"></textarea>
    </div> -->
    <br>
    
    <span class="form-group">
      <label for="file" style="white-space:pre;">   Upload Bird image</label>
      <input type="file" class="form-control-file" id="file">
      <br>
      <button type="submit" class="btn btn-default" style="position:relative;width:20%">search</button>
      
  </span>
  
  </form>
</div>

<!--scrollscript-->

 <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>





</body>
</html>

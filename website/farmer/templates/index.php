
{% extends 'home.html' %}

<html>
<head>
<title>Administrator</title>

</head>
<body>
<p class='text-center'>LIBRARY MANAGEMENT SYSTEM</p>
  

<div class="container col-sm-12">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	    <li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
	    <li data-target="#myCarousel" data-slide-to="6"></li>
		<li data-target="#myCarousel" data-slide-to="7"></li>
	    <li data-target="#myCarousel" data-slide-to="8"></li>
		<li data-target="#myCarousel" data-slide-to="9"></li>
	    <li data-target="#myCarousel" data-slide-to="10"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="s6.jpg">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="s7.jpg">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="s8.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
      <div class="item">
        <img src="mother1.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>  
      <div class="item">
        <img src="mother2.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>  
      <div class="item">
        <img src="mother3.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>  
      <div class="item">
        <img src="mother4.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>  
      <div class="item">
        <img src="mother5.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>  
      <div class="item">
        <img src="mother6.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
      <div class="item">
        <img src="g9.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
     <div class="item">
        <img src="s5.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
<div class="item">
        <img src="mother5.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
<div class="item">
        <img src="mother6.jpg">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container">
  <div class="row">   
<div class='subclass' onmouseover="left_over();" onmouseout="left_over();">
      <form action='index.php' method='post'>
<table class='table table-bordered' style='color:white;'><tr><th colspan='2'><h1>Registration form</h1></th></tr>
<tr><td>Name:</td><td><input type='text' style='color:black;'  size=20 name='username' required></td></tr>
<tr><td>password:</td><td><input type='text' style='color:black;' name='password'  autocomplete='off' required /></td></tr>
<tr><td>address:</td><td><input type='textarea' style='color:black;' cols="40" rows="4"  name='address'/></td></tr>
<tr><td>Age:</td><td> <input type='text' name='age'  required></td></tr>
<tr><td colspan='2'><input type='submit'  name='submit'/></td></tr>
</table>
</form>
</div>		
</div>
</div>
<div class="container"> 
<div class="row">
 <div  class="sublogin" onmouseout="right_over();" onmouseover="right_over();">
      <form action='login.php'  method='post'>
<table class='table table-bordered'><caption><h1>LOGIN HERE</h1></caption>
<tr><td>USER NAME:</td><td> <input type='text'  name='username'  required /></td></tr>
<tr><td>PASSWORD:</td><td><input type='password'  name='password'  required /></td></tr>
<tr><td colspan='2' ><input type='submit'  name='submit'/></td></tr>
</table>
</form>
</div> 
</div>
</div>
<div class="container">
<div class="row"> 
<button class="btn btn-lg" id="right" onclick="right_over()">LOGIN</button>
</div>
</div>
<div class="container">
<div class="row">
<button class="btn btn-lg" id=" onclick="">REGISTER</button>
</div>
</div>
</body>
</html>

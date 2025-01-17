<?php
session_start();
$hide="";
if(!isset($_SESSION['email'])){
    header("location:login.php");
}
else{
    if(isset($_SESSION['role'])){
      $role = $_SESSION['role'];
      if($role == 'User'){
        //header("location:about.php");
        $hide = "hide";
      }
    }
}


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Check-in Bar</title>
        <style>
          .hide{
            display:none;
          }
        </style>
  </head>
  <body>
    <div id="blla"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/qemkin.jpg" width="150px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav navbar-center">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="drinks.php">Drinks</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link" href="book.php">Book</a>
      </div>
      <div class="navbar-nav navbar-right">
        <a class="nav-link <?php echo $hide ?>"   href="dashboard.php">Dashboard</a>
        <a class="nav-link" href="logout.php">Logout</a>
        
      </div>
    </div>
  </div>
</nav>

    <div class="carousel-container">
      
     
      
      <button id="prevBtn">Prev</button>
      <button id="nextBtn">Next</button>


      <div class="carousel-slide">

        <img src="img/bar5.jpg" id="lastClone" height="530px">
        <img src="img/bar1.jpg" height="530px">
        <img src="img/bar2.jpg" height="530px">
        <img src="img/bar3.jpg" height="530px">
        <img src="img/bar4.jpg" height="530px">
        <img src="img/bar5.jpg" height="530px">
        <img src="img/bar1.jpg" id="firstClone" height="530px">


      </div>
    </div>

    

   


<div class="meh">
	<h3>Most Popular Drinks</h3>
	<p>Who wouldn't want one..</p>
</div>
  
<div id="showcasedrink">
	<div class="container">
  <div class="row">
    <div class="col-md drinkprod">
      <img style="width: 306px; height: 408px;" src="img/gjek.jpg">
      <h5 class="drinktitle"> Jack Daniels </h5>
      <p> Whiskey </p>
      
    </div>
    <div class="col-md drinkprod">
      <img style="width: 306px; height: 408px;" src="img/pecko.png">
      <h5 class="drinktitle">Peja Beer</h5>
      <p> Beer </p>
      
    </div>
    <div class="col-md drinkprod">
      <img style="width: 306px; height: 408px;" src="img/vodka1.jpg">
      <h5 class="drinktitle">Smirnoff Vodka</h5>
      <p> Vodka </p>
     
    </div>
  </div>
</div>
</div>
<br>
<div class="container">
<div class="row">
	<div class="col-xl choose-color">
		<h1>Best Coctails Ever Made</h1>
		<p>Like Superman is actually Clark Kent, The Cocktail Man is really James Vyse.
       He’s an award-winning mixologist who turned down his dream job in London’s The Shard,
       so that he could provide you with that professional cocktail lounge experience in the comfort of your own home.
       He is also known as "The Man", at least that's how the casual costumers refer to him.
       His cocktails are astonishing, since he makes them in the most passionate way ever..</p>
		<img src="img/jeger.jpg" style="width:600px;height:auto;bottom:0">
	</div>
	<div class="col-md choose-color">
		<img src="img/kuktell.jpg" style="height:620px;width:500px;padding-left:30px">
	</div>
</div>
</div>
<br>
<div id="live-music">
	<h1> Live Music, Live Events</h1>
	<p> Book your table now.  </p>

  <a href="book.php"><button style="width:200px;height:70px;">BOOK</button></a>
</div>
<br> <br>
<div class="showcasedrink">
	<div class="container">
  <div class="row">
    <div class="col-sm drinkprod">
      <img src="img/gjin.jpeg">
      <h5 class="drinktitle"> Wembley Dry Gin </h5>
      <p> Gin </p>
      
    </div>
    <div class="col-sm drinkprod">
      <img src="img/teqilla.jpg" style="height: 448px; width: 448px;">
      <h5 class="drinktitle">Jose Cuervo Especial </h5>
      <p> Tequilla </p>
    </div>
    <div class="col-sm drinkprod">
      <img src="img/tkuq.jpg" style="height: 448px; width: 448px;">
      <h5 class="drinktitle">Mouton Cadet</h5>
      <p> Red Wine </p>
     
    </div>
  </div>
</div>
</div>


 
  <div class="container1">
  
    <div>
      <img src="img/qemkin.jpg">
    </div>
  </div>
 
      <script src="slider.js">


      </script>
  


 </body>
</html>
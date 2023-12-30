<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="cbook.css">
</head>
<body style="background-color:white">
  <nav class="navbar navbar-expand-sm bg-dark  fixed-top">
    <div class="container-fluid">
      <h class="navbar-text"><strong>VHM CARS</strong></h>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="cbook.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">CONTACT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">ABOUT</a>
        </li>
      </ul>
    </div>
    </nav>
    
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>
    
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="c1.jpg" alt="range rover" width="100%" height="800px">
        <div class="carousel-caption">
          <h3>Ronge Rover</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="c2.jpg" alt="Chicago" width="100%" height="800px">
        <div class="carousel-caption">
          <h3>Maruthi Swift</h3>
          <p>Thank you, Swift!</p>
        </div> 
      </div>
      <div class="carousel-item">
        <img src="c3.jpg" alt="New York" width="100%" height="800px">
        <div class="carousel-caption">
          <h3>Innova</h3>
          <p>We love the Ride</p>
        </div>  
      </div>
      <div class="carousel-item">
        <img src="c4.jpg" alt="New York" width="100%" height="800px">
        <div class="carousel-caption">
          <h3>Virata Brezza</h3>
          <p>Make Your Own Ride</p>
        </div>  
      </div>
    </div>
    
    
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  
  <div class="container-fluid mt-3">
    <h3>Book Now And</h3>
    <p>Reach Your Destination With Our Cars.</p>
  </div>
    <div class="tax">
        <a href="details/Screenshot 2022-09-24 103711.jpg"><img src="car1 range.png" height="300px" width="300px"></a>
        <div class="ta">Range Rover</div> 
    </div>
    <div class="tax">
        <a href="details/Screenshot 2022-09-24 102807.jpg"><img src="car2.png" height="300px" width="300px"></a>
        <div class="ta">Maruthi Swift</div>
        
    </div>
    <div class="tax">
        <a href="details/Screenshot 2022-09-24 101854.jpg"><img src="car3.jpeg" height="300px" width="300px"></a>
        <div class="ta">INNOVA</div>
        
    </div>
    <div class="tax">
        <a href="details/Screenshot 2022-09-24 103245.jpg"><img src="car4.png" height="300px" width="300px"></a>
        <div class="ta">VITARA BREZZA</div>
        
    </div>
    <div class="BN">
    <form action="bookform.html" >
      <input type="submit" value="BOOK NOW">
    </form>
    </div>
    
</body>
</html>
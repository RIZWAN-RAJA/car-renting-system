<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cars 24/7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="cbook.css">
    <style>
      body{
      background-image: url("charge-mustang-ev.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      }
      h2{
        text-align:center;
        color:white;
        font-family:fantasy;
      }
      .avai{
        margin-top:80px;
        margin-left:665px;
      }
      .avai input{
        width:200px;
        border-radius:10px;
        font-family:cursive;
      }
      .avai input:hover{
        transform:scale(1.1);
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark  fixed-top">
    <div class="container-fluid">
      <h class="navbar-text"><strong>VHM CARS</strong></h>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT</a>
        </li>
      </ul>
    </div>
    </nav>
  <h1>VHM Cars 24/7</h1>
  <h2>Go And Explore Now</h2>
  <div class="avai">
  <form action="cars.php" method="POST">
    <input type="submit" value="Available Cars">
  </form>
  </div>
  
</body>
</html>
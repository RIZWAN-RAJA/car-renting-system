<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .last p{
            color:black;
            margin-left:20px;
            font-size:30px;
        }
        .last h1{
            text-align:center;
            text-decoration:underline;
        }
        .last{
            width:400px;
            border:1px solid white;
           
            margin-left:565px;
            margin-top:100px;
            box-shadow:0 0 2px 0 grey;
        }
        .last_down{
            margin-top:40px;
            margin-left:610px;
        }
        .last_down a input{
            text-decoration:none;
            background-color:red;
            color:white;
            border-radius:20px;
            width: 130px;
            height: 30px;
            margin:10px;
        }
        .last_down a input:hover{
            background-color:blue;
            transform:scale(1.1);
        }
    </style>
</head>
<body>
    <h3 style="text-align:center; font-size:20px">Your Booking Confirmed</h3>
<div class="last">
    <h1>Details</h1>
<?php
   
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $choose = $_POST['car'];
    $color = $_POST['color'];
    echo"<p>From: $from</p>";
    echo "<p> To: $to</p>";
    echo "<p> Pick Up Date: $date</p>";
    echo "<p> Pick Up Time: $time</p>";
    echo "<p> Car Name: $choose</p>";
    echo "<p> Color: $color</p>";
} 


$file=fopen("Details.txt","w");
    fwrite($file,$from);
    fwrite($file,$to);
    fwrite($file,$date);
    fwrite($file,$time);
    fwrite($file,$choose);
    fwrite($file,$color);
    

?>
</div>
<div class="last_down">
<a href="cbook.php"><input type="submit" value="Back To Home"></a>
<a href="download.php?Subject=report&body=Detail &attachment=Details.txt"><input type="button" value="DOWNLOAD"></a>
</div>
<?php
     include "connection.php";
     $query="INSERT INTO info VALUES('$from','$to','$date','$time','$choose','$color');";
     mysqli_query($connection,$query)
?>
</body>
</html>

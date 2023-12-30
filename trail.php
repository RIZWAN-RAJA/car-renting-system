<?php
    include "connection.php";
  
  
   
   
    $que="DELETE  FROM reginfo;";
    mysqli_query($connection,$que);
   
?>
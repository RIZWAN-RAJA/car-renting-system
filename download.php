<?php
    $file="Details.txt";
    if (file_exists($file)){
        header('Content-Disposition: attachment; filename="'.basename($file)) .'"';
        readfile($file);
    }
?>
<?php 
        
        $cn = mysqli_connect('localhost','root','','facebook');
        if(!$cn)
        {
            echo "ERROR  : DATABASE NOT CONNECTED";
        }   
?>
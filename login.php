<?php
 $user = $_POST["username"]; 
 $pass = $_POST["password"]; 
    if ($user == "rafly" && $pass == "123") {     
            echo "Login Berhasil"; 
        } else {     
            echo "Login Gagal";
        } 
?> 
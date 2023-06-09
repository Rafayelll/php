<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
    //   echo $username;
    //   echo $password;
        $sql = "SELECT  * FROM `login` WHERE `username` = '$username' AND `password` = '$password'";  
        $result = mysqli_query($con, $sql);  

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        // var_dump($result);
        if($count == 1){ 
            header("Location:../admin_css/index.php") ;
        //     // header("Location:../prog 2 web html-1/index.php") ;
        //     // header("Location:../admin/index.php") ;
        //     // echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            header("location:../admin_css/404.php") ;
        //     // echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?> 
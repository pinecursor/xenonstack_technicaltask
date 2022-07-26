<?php  
    include('config.php');
    session_start();  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from logindetails where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);    
        
        if($count == 1){  
            $_SESSION['user']= $username;
            header("location:dashboard.php");
            
        }  
        else{  
            echo '<script type="text/javascript">alert("That Password or Username is Incorrect !!");
            history.back();</script>';  
        }     
?>  

<?php
include('config.php');
    $name = $_POST['user'];
     $email = $_POST['email'];
     $password = $_POST['pass'];
     $conf = $_POST['copass'];
     $dob= $_POST['dob'];
     $checker = mysqli_query($con,"SELECT * FROM `logindetails` WHERE `Email ID`='$email'"); 
     $numrow = mysqli_num_rows($checker);
     $namechecker=mysqli_query($con,"SELECT * FROM `logindetails` WHERE `Username`='$name'"); 
     $numrowname = mysqli_num_rows($namechecker);
     if($numrow>0 or $numrowname>0)
     {
      echo '<script type="text/javascript">alert("That Email or Username already exits !!Try another Email");
      history.back();</script>';
     }
     else{
        if($conf!=$password)
        {
         echo '<script type="text/javascript">alert("Password and confirm Password Should be Same");
         history.back();</script>';
        }
        else{
     $sql = "INSERT INTO `logindetails` (`Username`,`Email ID`,`Password`,`DOB`) VALUES ('$name','$email','$password','$dob')";
     if (mysqli_query($con, $sql)) {
      echo "<script>
      alert('registration successfull');
      window.location.href='http://localhost/xenonstack';
      </script>";
       // header("Location: http://localhost/frontend/index.html");
        //exit();
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
   }
     mysqli_close($con);
}
?>




<?php
include('config.php');
     $email = $_POST['email'];
     $info = $_POST['infor'];
     $sql = "INSERT INTO `contact` (`Email ID`,`info`) VALUES ('$email','$info')";
     if (mysqli_query($con, $sql)) {
      echo "<script>
      alert('query sent we will contact you if need be thank you!!');
      window.location.href='http://localhost/xenonstack';
      </script>";
       // header("Location: http://localhost/frontend/index.html");
        //exit();
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
   
     mysqli_close($con);
?>



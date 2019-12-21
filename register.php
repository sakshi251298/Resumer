<?php
session_start();
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $con = mysqli_connect($dbhost, $dbuser, $dbpass,'resumer');
   
         if(! $con ){
            die('Could not connect: ' . mysqli_error());
         }
         else {
             echo "connection done";
         }

        if (isset($_POST['username'])){
            $username = stripslashes($_POST['username']); // removes backslashes
            $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
            $email = stripslashes($_POST['email']);
            $email = mysqli_real_escape_string($con,$email);
            $phoneno = stripslashes($_POST['PhoneNumber']);
            $phoneno = mysqli_real_escape_string($con,$phoneno);
            $password = stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($con,$password);
            $query = "INSERT into `users` (name ,phoneno ,email , password) VALUES ('$username','$phoneno','$email' , '$password')";
            $result = mysqli_query($con,$query);
            if($result){
                header("Location: loginmain.php?success=1");
            }
            else {
                header("Location: loginmain.php?error=1");
            }
    }
    else {
        echo "error";
    }

?>

<html>
   <head>
      <title>Connecting MySQLi Server</title>
   </head>
   
   <body>
      <?php
         session_start();
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'resumer');
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         
    // If form submitted, insert values into the database.
    if (isset($_POST['emaillogin'])){
		
		$email = stripslashes($_REQUEST['emaillogin']); // removes backslashes
		$email = mysqli_real_escape_string($conn,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['passwordlogin']);
		$password = mysqli_real_escape_string($conn,$password);
		 
   //Checking is user existing in the database or not
   $query= " SELECT * FROM `users` WHERE email='$email' and password= '$password' ";
      //   $query = "SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'";
		$result = mysqli_query($conn,$query);
		$row    = mysqli_fetch_array($result);
      $Name     = $row['name'];
      $acc_id =   $row['acc_id'];
      echo "<script>console.log(". $acc_id . ")</script>";
		// or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows>=1){
			// $_SESSION['username'] = $username;
         $_SESSION['name'] = $Name;
         $_SESSION['acc_id'] = $acc_id;
         // echo $email;
			header("Location: tempinfo.php"); // Redirect user to index.php
			}
			else{
            // echo $row['name'];
            // echo $email;
            // echo $password;
            // echo $rows;
				// echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
			 header("Location: loginmain.php?error=1");	
			}
    }
         mysqli_close($conn);
      ?>
   </body>
</html>

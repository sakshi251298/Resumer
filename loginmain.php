<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="loginpage">
    <div class="Header">
    <div class="brand">
      Résumer
    </div>
      <p id="formindentification" style="font-size: 25px;color:#1DBFAF;font-weight:bolder;
      letter-spacing:1px">Register</p>
    <nav>
      <a href="index.html">Home</a>
      <a href="tutorial.html">Tutorial </a>
    </nav>
    </div>
    
    <?php  
     if(isset($_GET['success'])==true) {

      ?>
       <script>
       alert('You have successfully register! Please log in');
       </script>
     <?php 
     }
     if(isset($_GET['error'])==true) {
       ?>
       <script>
       alert('some error occured please try again!!');
       </script>
   <?php  }
      ?>
    <div class="login" >
      <div class="loginswitch" style="display: none;" id="log">
        <form class="form" name="myform" action="login.php"  method="POST">
        
          <input type="text" name="emaillogin" placeholder="Email Id">
          <input type="password" name="passwordlogin" placeholder="Password">
          <input type="submit" class="submit">
          <a onclick="switchForm('log')" class="registerbtn" style="text-align: center; color: rgb(26, 27, 27)" href="#">
            Create Account
          </a>
        </form>
      </div>
      <div class="registerform" id="reg" >
        <form class="form" name="myform" action="register.php" onsubmit="return(Validate());" method="POST">
          <input type="text" name="username" placeholder="username">
          <input type="text" name="PhoneNumber" placeholder="Phone Number">
          <input type="text" name="email" placeholder="Email Id">
          <input type="password" name="password" placeholder="Password">
          <input type="submit" class="submit">
          <a  class="loginbtn"  onclick="switchForm('reg')" style="text-align: center; color: rgb(26, 27, 27)" href="#">
            Have a account ?<span style="color: #1DBFAF;"> Login </span> 
          </a>
        </form>
      </div>
    </div>
<script type="text/javascript">
  // $(".form").submit(function (event) {
  //     if ($("input").first().val() === "/^\S+@\S+\.\S+$/") {
  //     $("span").text("Validated...").show();
  //     return;
  //   }
  //       // alert("Handler for .submit() called.");
  //     event.preventDefault();
  //   });
  function Validate(){
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(document.myform.email.value)==false)
      {
        alert("Please provide valid email !");
        document.myform.email.focus();
      }  
      var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
      if (regex.test(document.myform.password.value)==false) {
        alert("please enter valid passwors of minimum 8 characters with uppercase , lowercase , number and special characters !");
        document.myform.password.focus();

      }   
       
  }
  function switchForm(formvar){
    if(formvar=='reg')
    {
      document.getElementById("reg").style.display="none";
      document.getElementById("log").style.display="block";
      document.getElementById("formindentification").innerText = "Log In";
    }
    else
    {
      document.getElementById("reg").style.display = "block";
      document.getElementById("log").style.display = "none";
      document.getElementById("formindentification").innerText = "Register";
    }
  }
  


</script>
</body>
</html>
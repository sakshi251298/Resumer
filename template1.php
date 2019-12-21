<?php 
    session_start();
    $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $con = mysqli_connect($dbhost, $dbuser, $dbpass,'resumer');
   
         if(! $con ){
            die('Could not connect: ' . mysqli_error());
         }
    $acc_id = $_SESSION["acc_id"];
    $temp_id =$_SESSION['temp_id']; 
    // echo $temp_id;
    $query = "SELECT * FROM cvdetails where acc_id='$acc_id' and temp_id='$temp_id'";
    $tempresult = mysqli_query($con,$query);
    $emparray = array();
    while($row =mysqli_fetch_assoc($tempresult))
    {
        $emparray[] = $row;
    }
    ?>
<script>
var temp_details =  <?php   echo json_encode($emparray); ?>;
console.log(temp_details);
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template 1
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Header">
        <div class="brand">
            Résumer
        </div>
        <nav>
            <a href="index.html">Home</a>
            <a href="tutorial.html">Tutorial </a>
        </nav>
    </div>
    <div class="templayout">
        <div class="tempdesign">
            <div class="cvheader">
                <div class="cvimg">
                    <img src="cv1.jpg"   alt="">
                </div>
                <div class="cvpersonal">
                    <span class="cvname" id="cvname">
                        
                    </span>
                    <span class="cvsubdetail" id="cvsubdetail">
                       Email:  
                    </span>
                    <span class="cvsubdetail" id="phno">
                        Phone No: 9324614651
                    </span>
                    <span class="cvsubdetail" id="dob">
                        DOB:
                    </span>
                    <span class="cvsubdetail" id="lang">
                        Languages:
                    </span>
                </div>
            </div>
            <div class="cvcontent">
                <div class="objective">
                    <span style="font-size: 26px;color: #44c0b4;letter-spacing: 1px;font-weight: bolder;" >
                        Objective
                    </span>
                    <span  id="objective" style="margin-top: 7px; padding: 10px; color: #1b1d1e; background: rgb(239, 239, 239); border-radius: 4px;font-size: 15px;text-align: justify;line-height: 25px; ">
                        Elementary teacher looking for a position at a small independent school, where I can apply my five years of teaching
                        experience, STEM-oriented instruction, technology, and curriculum development skills to support student growth and
                        success.
                    </span>
                </div>
                <div class="education" style="margin-top:20px ;">
                    <span style=" font-size: 26px;color: #44c0b4;letter-spacing: 1px;font-weight: bolder;">
                        Education
                    </span>
                    <div style="margin-top: 7px; padding: 10px; color: #1b1d1e; background: rgb(239, 239, 239); border-radius: 4px;font-size: 19px;text-align: justify;line-height: 25px; ">
                        <span id="ssc"> </span><br>
                        <span style="font-size: 15px; letter-spacing: 1px" id="sscpassing"> Hello </span>
                    </div>
                    <div style="margin-top: 7px; padding: 10px; color: #1b1d1e; background: rgb(239, 239, 239); border-radius: 4px;font-size: 19px;text-align: justify;line-height: 25px; ">
                         <span id="college"> </span>
                         <br>
                        <div id="collegepassing" style="font-size: 15px; letter-spacing: 1px"> s </div>
                    </div>
                </div>
                <div class="cvskill">
                    <span  style="margin-top: 20px; font-size: 26px;color: #44c0b4;letter-spacing: 1px;font-weight: bolder;">
                        Skills
                    </span>
                    <!-- <ul>
                        <li> Java </li>
                        <li> Python</li>
                        <li> HTML </li>
                        <li> CSS </li>
                    </ul> -->
                    <span id="skills" style="margin-top: 7px; padding: 10px; color: #1b1d1e; background: rgb(239, 239, 239); border-radius: 4px;font-size: 19px;text-align: justify;line-height: 25px; "></span>
                
                </div>
                <div class="cvhobbies">
                    <span  style="margin-top: 20px; font-size: 26px;color: #44c0b4;letter-spacing: 1px;font-weight: bolder;">
                        Hobbies
                    </span>
                    <!-- <ul>
                        <li> Dancing </li>
                        <li> Travelling </li>
                        <li> Food </li>
                        <li> Fashion </li>
                    </ul> -->
                    <span id="interest" style="margin-top: 7px; padding: 10px; color: #1b1d1e; background: rgb(239, 239, 239); border-radius: 4px;font-size: 19px;text-align: justify;line-height: 25px; "> 

                    </span>                
                </div>
            </div>
        </div>
    </div>
    <script>
        
        document.getElementById("cvname").innerText = temp_details[0].name;
        document.getElementById("cvsubdetail").innerHTML =  "<b> Email :</b> " + temp_details[0].email;
        document.getElementById("phno").innerHTML ="<b> Phone No :</b> " + temp_details[0].phoneno;
        document.getElementById("dob").innerHTML = "<b> DOB :</b> " +temp_details[0].dob;
        document.getElementById("lang").innerHTML = "<b> Languages :</b> " + temp_details[0].languages;
        document.getElementById("objective").innerHTML = temp_details[0].objectives;
        document.getElementById("ssc").innerText = temp_details[0].ssc;
        document.getElementById("college").innerText = temp_details[0].college;
        document.getElementById("skills").innerText = temp_details[0].skills;
        document.getElementById("interest").innerText = temp_details[0].interest;
        // var sscpy = temp_details[0].sscpassingyear;

        document.getElementById("sscpassing").innerText =  temp_details[0].sscpassingyear;
        document.querySelector("#collegepassing ").innerText = temp_details[0].collegepassingyear;

    
    </script>
</body>
</html>
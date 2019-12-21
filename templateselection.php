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

        if (isset($_POST['name'])){
            $name = stripslashes($_POST['name']); // removes backslashes
            $name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
            $email = stripslashes($_POST['email']);
            $email = mysqli_real_escape_string($con,$email);
            $phoneno = stripslashes($_POST['phoneno']);
            $phoneno = mysqli_real_escape_string($con,$phoneno);
            $dob = stripslashes($_POST['dateofBirth']);
            $dob = mysqli_real_escape_string($con,$dob);
            $language = stripslashes($_POST['languages']);
            $language = mysqli_real_escape_string($con,$language);
           
            $objectives = stripslashes($_POST['objectives']);
            $objectives = mysqli_real_escape_string($con,$objectives);
            $ssc = stripslashes($_POST['ssc']);
            $ssc = mysqli_real_escape_string($con,$ssc);
            $sscpassingyear = stripslashes($_POST['sscpassingyear']);
            $sscpassingyear = mysqli_real_escape_string($con,$sscpassingyear);
            $college = stripslashes($_POST['college']);
            $college = mysqli_real_escape_string($con,$college);
            $collegepassingyear = stripslashes($_POST['collegepassingyear']);
            $collegepassingyear = mysqli_real_escape_string($con,$collegepassingyear);
            $skills = stripslashes($_POST['skills']);
            $skills = mysqli_real_escape_string($con,$skills);
            $interest = stripslashes($_POST['interest']);
            $interest = mysqli_real_escape_string($con,$interest);
            $work = stripslashes($_POST['work']);
            $work = mysqli_real_escape_string($con,$work);
            $acc_id = $_SESSION['acc_id'];
            $query = "INSERT into `cvdetails` (acc_id,name,phoneno,email,dob,languages,objectives,ssc,sscpassingyear,college,collegepassingyear,skills,interest,work) VALUES ('$acc_id','$name','$phoneno','$email','$dob','$language','$objectives','$ssc','$sscpassingyear','$college','$collegepassingyear','$skills','$interest','$work')";
            $result = mysqli_query($con,$query);
            $tempquery = "SELECT * FROM `cvdetails` WHERE name='$name' and email='$email' and languages='$language' and ssc='$ssc' and work='$work'";
            $tempresult = mysqli_query($con,$tempquery);
            $row    = mysqli_fetch_array($tempresult);
            $temp_id     = $row['temp_id'];
            
            if($result){
                $_SESSION['temp_id'] = $temp_id;
                header("Location: templates.php?success=1");
            }
            else {
                header("Location: tempinfo.php?error=1");
            }
    }
    else {
        echo "error";
    }

?>

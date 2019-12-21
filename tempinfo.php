<?php
session_start();
// echo $_SESSION['acc_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temp Info</title>
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
    <div>

        <form action="templateselection.php" method="POST" class="cvform" >
            <span style="font-size: 30px; color: #1DBFAF; font-weight: bold; letter-spacing: 1px;">Fill your Data</span>
            <input type="text" name="name" placeholder="John Doe">
            <input type="text" name="phoneno" placeholder="9800000001">
            <input type="text" name="email" placeholder="name@example.com">
            <input type="date" name="dateofBirth" placeholder="MM/DD/YYYY">
            <input type="text" name="languages" placeholder="English,Hindi">
            <label>Objectives</label>
            <textarea name="objectives" id="" cols="30" rows="10"></textarea>
            <label >Education</label>
            <input type="text" name="ssc" placeholder="SSC school name">
            <input type="number" name="sscpassingyear" placeholder="Year of passing" >
            <input type="text" name="college" placeholder="College name">
            <input type="number" name="collegepassingyear" placeholder="Year of passing">
            <label >
                Skills
            </label>
            <textarea name="skills" id="skills" cols="30" rows="10"></textarea>
            <label>Interest</label>
            <textarea name="interest" id="interest" cols="30" rows="10"></textarea>
            <label >Work Experience</label>
            <textarea name="work" id="" cols="30" rows="10"></textarea>
            <input  class="createbutton" type="submit" value="Create" >


        </form>


    </div>
</body>
</html>
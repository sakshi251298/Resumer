<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templates</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
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
    <div style="font-size: 40px;font-family: 'Pacifico', cursive;color: black;color:#1dbcac;font-weight:bolder;padding: 80px;padding-bottom: 23px; display: flex;justify-content: center;">
        Templates for you !
    </div>
    <div class="gridalign">
        <form action="template1.php" method="POST" style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
            <div style="display: grid; grid-template-columns:1fr 1fr 1fr 1fr;grid-template-rows: 1fr 1fr;grid-gap: 25px;justify-content: center;align-items: center; ">
                <div class="input">
                    <input type="radio" name="temp" class="hid" value="new"></input>
                    <label class="t1"></label>
                </div>
                <div class="input">
                    <input type="radio" name="temp" class="hid" value="new"></input>
                    <label class="t1 t2"></label>
                </div>
                <div class="input">
                    <input type="radio" name="temp" class="hid" value="new"></input>
                    <label class="t1 t3"></label>
                </div>
                <div class="input">
                    <input type="radio" name="temp" class="hid" value="new"></input>
                    <label class="t1 t4"></label>
                </div>
                <div class="input">
                    <input type="radio" name="temp" class="hid" value="new"></input>
                    <label class="t1 t5"></label>
                </div>
                <div class="input">
                    <input type="radio" name="temp" class="hid" value="new"></input>
                    <label class="t1 t6"></label>
                </div>
                <div class="input">
                    <input type="radio" name="temp" class="hid" value="new"></input>
                    <label class="t1 t7"></label>
                </div>
                <div class="input">
                    <input type="radio" name="temp" class="hid" value="new"></input>
                    <label class="t1 t8"></label>
                </div>
            </div>
            <input type="submit" style="width: 150px;display: flex;height: 27px;flex-direction: column;align-items: center;justify-content: center;color: white;background: #1dbcac;letter-spacing: 1px;">
        </form>
    </div>
</body>
</html>
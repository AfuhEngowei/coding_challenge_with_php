<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
        
    <form action = "day2.php" method = "get">
        Enter Your Name: <input type = "text"  name = "username"><br>
        Enter Your Age: <input type = "number" name = "age"><br>
        <input type="submit">
       </form>
    <?php  echo "Your name is"." ".$_GET["username"]. " " ."and" ?>
    <?php  echo "your age is" . " ".  $_GET["age"]  ?>
</body>
</html>
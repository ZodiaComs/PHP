<?php
    session_start();
    if($_SESSION["check"]=="No")
    {
        echo "Illegal entry!<br/>";
        echo "returning to login page in 3 seconds";
        header("Location:login.php");
    }
?>

<html>
<head> 
    <meta charset="utf8">
    <title> Registration Form </title>
</head>

<body>
    <h1><center>Registration Form</center></h1>
    <form action="result.php" method="post">
        <center>
        name:<input type="text" name="sName" placeholder="Please input your name" required><br/>
        student ID:<input type="text" name="sID" placeholder="Please input your student ID" required><br/>
        department:<input type="text" name="sDepartment" placeholder="Please input your department" required><br/>
        E-mail:<input type="email" name="sEmail" placeholder="Please input your E-mail" required><br/>
        gender:
        <input type="radio" name="sGender" value="male">男
        <input type="radio" name="sGender" value="female" checked>女
        <br/>
        <br/>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
        </center>
    </form>
</html>
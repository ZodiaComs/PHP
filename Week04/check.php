<?php
ob_start();
session_start();
?>

<meta charset="utf-8">
<?php
$sId="nuk";
$sPwd="12345";

$username=$_POST["username"];
$password=$_POST["password"];

if($sId==$username && $sPwd==$password){
    $_SESSION["check"]="Yes";
    header("Location:success.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
ob_flush();
?>
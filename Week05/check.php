<?php
ob_start();
session_start();
?>

<meta charset="utf-8">
<?php
$sId="nuk";
$sPwd="12345";

$uID=$_POST["uID"];
$uPWD=$_POST["uPWD"];

if($sId==$uID && $sPwd==$uPWD){
    $_SESSION["check"]="Yes";
    header("Location:success.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
ob_flush();
?>
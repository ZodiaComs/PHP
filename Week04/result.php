<?php
$sName=$_POST["sName"];
echo "name：".$sName."<br/>";
$sID=$_POST["sID"];
echo "student ID：".$sID."<br/>";
$sDepartment=$_POST["sDepartment"];
echo "department：".$sDepartment."<br/>";
$sGender=$_POST["sGender"];
echo "gender：".$sGender."<br/>";
$sEmail=$_POST["sEmail"];
echo "E-mail：".$sEmail."<br/>";

echo "registration successful!";
echo "<a href='logout.php'>Sign Out</a>";
?>
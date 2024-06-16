<html>
<head> 
<meta charset="utf8">
</head>

<form action="reply.php" method="post">
name:<input type="text" name="sName" placeholder="Please input your name" required><br/>
student ID:<input type="text" name="sID" placeholder="Please input your student ID" required><br/>
department:<input type="text" name="sDepartment" placeholder="Please input your department" required><br/>
E-mail:<input type="email" name="sEmail" placeholder="Please input your E-mail" required><br/>
gender:
<input type="radio" name="sGender" value="male">男
<input type="radio" name="sGender" value="female" checked>女
<br/>
Comment:
<textarea name="sComment" value="" rows="10" cols="50">
</textarea>
<br/>
<br/>
<input type="submit" value="submit">
<input type="reset" value="reset">
</form>

</html>
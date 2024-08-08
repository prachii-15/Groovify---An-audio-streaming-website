<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
<form method="post" action="<?php echo site_url('Musicadmin_c/Displayuser_c/adduser') ?>">
	<center>
		
	Username : <input type="text" required="" name="txtuname">
		<br>
	Password : <input type="Password" required="" name="txtpwd">
		<br>
		E-mail : <input type="text" required="" name="txtemail">
		<br>
		Profile picture : <input type="text" required="" name="txtpropic">
		<br>
		Contact Number : <input type="text" required="" name="txtcontact">
		<br>
	Registration:<input type="text" required="" name="txtregdate">
		<br>
		Date of birth: <input type="text" required="" name="txtdob">
		<br>
	Gender: <input type="text" required="" name="txtgender">
		<br>
		Status: <input type="text" required="" name="txtstatus">
		<br>
		<input type="submit" name="btnsubmit" value="Add User">
		</center>
		</form>
</body>
</html>
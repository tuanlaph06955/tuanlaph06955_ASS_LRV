<html>
<head>
<title>Register form</title>
</head>
<body>
<form method="" action="">
@csrf
<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
<caption>Registration form</caption>

<tr>
<th>Enter your name</th>
<td><input type="text" name=""name/></td>
</tr>

<tr>
<th>Enter your password</th>
<td><input type="password" name="password" /></td>
</tr>

<tr>
<th>Enter your email</th>
<td><input type="email" name="email" /></td>
</tr>

<tr>
<th>Select your DOB</th>
<td><input type="date" name="dob" /></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="Save My Data"/>
<input type="reset" value="Reset Data"/>
</td>
</tr>

</table>
</form>
</body>
</html>
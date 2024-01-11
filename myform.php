<html>
<body>
<style>
input
{
	border-style: groove;
	border-color:brown
}	
.tex
{
	border:2px solid brown;
}			
</style>
<h2 align="center">Ragistration Form</h2>
<form action="fcatch.php" method="get">
<table align="center" cellspacing="2" cellpadding="2" border="0" bgcolor="#EAE0DA">
<tr>
<td><label>Username:</label></td>
<td><input type="text" name="uname"></td>
</tr>
<td><label>Password:</label></td>
<td><input type="password" name="passw"></td>
</tr>
<td><label>Name:</label></td>
<td><input type="text" name="name"></td>
</tr>
<td><label>Address:</label></td>
<td><input type="text" name="add"></td>
</tr>
<td><label>coutry:</label></td>
<td>
<select name="coutry">
<option>(please select coutry)</option>
<option>canada</option>
<option>India</option>
<option>China</option>
<option>U.K</option>
</td>
</select>
</tr>
<tr>
<td><label>Zip code:</label></td>
<td><input type="code" name="cd"></td>
</tr>
<tr>
<td><label>Email:</label></td>
<td><input type="email" name="mail"></td>
</tr>
<tr>
<td><label>Sex:</label></td>
<td><input type="radio" name="gender" id="male" value="male" checked><label class="tex">Male</label>
<input type="radio" name="gender" id="female" value="female"><label class="tex">Female</label>
</td>
</tr>
<tr>
<td><label>Language:</label></td>
<td><input type="checkbox" name="English" value="English"><label class="tex">English</label>
<input type="checkbox" name="Non English" value="Non English"><label class="tex">Non English</label></td>
</tr>
<tr>
<td><label>About:</label></td>
<td><textarea name="abt" cols="30" rows="5"></textarea></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>
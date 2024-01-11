<?php
$username=$_REQUEST['uname'];
$password=$_REQUEST['passw'];
$name=$_REQUEST['name'];
$address=$_REQUEST['add'];
$country=$_REQUEST['country'];
$zip_code=$_REQUEST['cd'];
$Email=$_REQUEST['mail'];
$sex=$_REQUEST['gender'];
$language=$_REQUEST['English'];
$about=$_REQUEST['abt'];


echo "<table border=1 bordercolor=black><tr><td>Username:</td><td>$username</td></tr>
<tr><td>Password:</td><td>$password</td></tr>
<tr><td>Name:</td><td>$name</td></tr>
<tr><td>Address:</td><td>$address</td></tr>
<tr><td>country:</td><td>$country</td></tr>
<tr><td>Zip code:</td><td>$zip_code</td></tr>
<tr><td>Email:</td><td>$Email</td></tr>
<tr><td>Sex:</td><td>$sex</td></tr>
<tr><td>Language:</td><td>$language</td></tr>
<tr><td>About:</td><td>$about</td></tr>
</table>"
?>
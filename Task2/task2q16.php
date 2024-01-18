<html>
<body>
<form action="" method="post">
input number:<input type="text" name="num"/><br>
<input type="submit"/>
</form>
</body>
</html>

<?php
$str=$_REQUEST['num'];
$voweles=array("a","e","i","o","u","A","E","I","O","U");
$count=0;
for($i=0;$i<strlen($str);$i++)
{
	if(in_array(strtolower($str[$i]),$vowels))
	{
		$count++;
	}
}
echo "number of vowels in $str is: $count";


?>
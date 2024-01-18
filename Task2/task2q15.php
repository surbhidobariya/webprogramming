<html>
<body>
<form action="" method="get">
input first value:<input type="text" name="first"/>
input second value:<input type="text" name="second"/>
input third value:<input type="text" name="third"/>
<input type="submit">

</form>
</body>
</html>
<?php
$a=$_REQUEST['first'];
$b=$_REQUEST['second'];
$c=$_REQUEST['third'];
echo "<table border=1 bordercolor=black>
<tr><td>first:</td><td>$a</td></tr>
<tr><td>second:</td><td>$b</td></tr>
<tr><td>third:</td><td>$c</td></tr>

</table>";

if($a>$b)
{
	if($a>$c)
	{
		echo "a is big";
	}
	else
	{
	    echo "c is big";	
	}
}
else
{
    if($b>$c)
	{
		echo "b is big";
	}		
	else
	{
		echo "c is big";
	}
}

?>
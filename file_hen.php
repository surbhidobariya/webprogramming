<?php
//$myfile=fopen("b1_220801090.txt","r");
//echo fgets($myfile);

//$myfile=fopen("b1_220801090.txt","w");
//$txt="surbhi dobariya";
//fwrite($myfile,$txt);

$new="hello world";
file_put_contents("b1_220801090.txt",$new,FILE_APPEND);
if(unlink("b1_220801090.txt"))
{
	echo "file delete";
}
else
{
	echo "not delete";
}


?>
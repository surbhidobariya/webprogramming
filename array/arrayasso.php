<?php
$student_detail=array("index"=>1,"rollno"=>1,"name"=>"surbhi","enrollno"=>22080,"course"=>"BCA","add"=>"jetpur","phno"=>9925175099,"age"=>19,"department"=>"it","div"=>"a1");
print_r($student_detail);
foreach($student_detail as $myval)
{
	echo "$myval";
	echo "<br>";
}
?>
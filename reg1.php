<?php
 $con=mysqli_connect('localhost','root','','tedx');

 $query="SELECT Id FROM main_info ORDER BY Id DESC LIMIT 1";
 $result=mysqli_query($con,$query);
 $result1=mysqli_fetch_assoc($result);
 $count=$result1['Id'];
 echo $count;
 
 for($i=0;$i<$count;$i++)
 {
 	$c=$i+1;
 	
 	$query="SELECT * FROM main_info WHERE Id='{$c}'";
 	$result=mysqli_query($con,$query);
 	$result1=mysqli_fetch_assoc($result);
  
 	echo '{<br>';
 	echo 'Id: '.$result1['Id'].'<br>';
 	echo 'First Name" '.$result1['Fname'].'<br>';
 	echo 'Last Name: '.$result1['Lname'].'<br>';

 	$query="SELECT * FROM other_info WHERE Id='{$c}'";
 	$result=mysqli_query($con,$query);
 	$result1=mysqli_fetch_assoc($result);

 	echo 'Phone Number: '.$result1['Phone'].'<br>';
 	echo 'Email: '.$result1['Email'].'<br>';
 	echo 'Institution: '.$result1['Institution'].'<br>';
 	echo 'Date of Birth: '.$result1['Birthdate'].'<br>';

 	$query="SELECT * FROM other_info2 WHERE Id='{$c}'";
 	$result=mysqli_query($con,$query);
 	$result1=mysqli_fetch_assoc($result);

 	echo 'Previous Events: '.$result1['PreviousEvents'].'<br>';
 	echo 'Quotes: '.$result1['Quotes'].'<br>';
 	echo 'Learn: '.$result1['Learn'].'<br>';
 	echo '}<br>';
 }

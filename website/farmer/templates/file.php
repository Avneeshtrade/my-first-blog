<?php
include("home.php");
$query="INSERT INTO user_admin(user_name, password, user_age, user_address) VALUES ('Avneesh Dwivedi','123456789@','20','bhopal') ";
$result=mysqli_query($connect,$query);
	if($result)
	{
echo" you have registered";
		
	}
	else{
		echo"not able to register !!!!!!Register again";
	}


	

?>
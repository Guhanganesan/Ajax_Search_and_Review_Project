<?php
     if(!empty($_GET['q']))
	 {   session_start();
         $table=$_SESSION['table'];
		 include("db.php");
		 $q = $_GET['q'];
		 $query = "select * from $table where pages like '%$q%'";
		 $result = mysqli_query($conn,$query);
		 while($row=mysqli_fetch_assoc($result))
		 {
			 echo "<a href='http://localhost/gobumpr/details/pages.php?data=".$row['pages']."'>".$row['pages']."</a>";
			 
			 
		 }
	 }
	
?>


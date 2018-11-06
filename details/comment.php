<?php
         ob_start();
		 if(!empty($_GET))
		 {   include("../db.php");
	         //if($conn){echo "success";}
	         $name =$_GET['name'];
			 $text =$_GET['text'];
			 $rating=$_GET['rating'];
			 $email=$_GET['email'];
			 $data=$_GET['data'];
			 //echo $name,$text,$rating,$email,$data;
			 $query ="insert into review(name,rate,comments,email,pages) values('$name','$rating','$text','$email','$data')";
			 $sql=mysqli_query($conn,$query);
			 if($sql)
			 {
				 //echo "successfully submitted";
				 header("location:http://localhost/gobumpr/details/pages.php?data=$data");
			 }
	     }
		 ob_end_flush();
?>
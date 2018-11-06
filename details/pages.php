<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="jquery.star.rating.js"></script>
	<link rel="stylesheet" href="style.css"></link>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
h2{color:red;}
body{background-color:#A2A2A4;}
</style>
</head>

<body>

<!--             ------------>

<div class="container" style="background-color:#FFCFAB;">
  <div class="row">
       <div class="col-md-2">
		<a href="http://localhost/gobumpr/Index.php"> Home Page </a>
	   </div>
	   <div class="col-md-4">
			<h2>Click Rating</h2>
			<div class="rating"> </div>

			<div id="here">      </div> 
		</div>
		<div class="col-md-6">
		<?php
		     if(!empty($_GET['data']))
			 {
				 $x=$_GET['data'];
				 switch($x)
				 {
					 case "chennai_page1": echo "<h2>Hi I am Chennai Area1 Restaurent</h2>"; break; 
					 case "chennai_page2": echo "<h2>Hi I am Chennai Area2 Restaurent</h2>"; break; 
					 case "chennai_page3": echo "<h2>Hi I am Chennai Area3 Restaurent</h2>"; break; 
					 case "chennai_page4": echo "<h2>Hi I am Chennai Area4 Restaurent</h2>"; break; 
				 }
			 }
		?>
		</div>
   </div>
</div>

<!------- ------------------->

<div class="container">
 <div class="row">
	<form method="get" action="comment.php" 
	id="myform" style="background-color:#F6FF82">
			<input type="hidden" id="hid" name="rating">
			<input type="hidden" value="<?php echo $_GET['data']?>"	name="data">
	<div class="form-group">		
			Name:   <input name="name" class="form-control"></input>
	</div>
	<div class="form-group">
			Email:  <input name="email" class="form-control"> </input>
	</div>
	<div class="form-group">
			Comment:<textarea name="text" class="form-control"> </textarea>
	</div>		
	</form>
	<div class="form-group">
		<button onclick="myFunction()" class="form-control" style="background-color:#010DC8;color:white;"> 
		submit</button>
	</div>
<script>
	$(document).ready(function(){
		$('.rating').addRating();
		
	})
	
	function myFunction()
	{
	  x=document.getElementById("here").innerHTML;
	  //console.log(x);
	  document.getElementById("hid").value=x;
	  document.getElementById('myform').submit();
	}
	
</script>

<div class="col-md-12">
<?php
	  
	     if(!empty($_GET))
		 {
	         include("../db.php");
			 echo"<style>
			 table {
    font-family:  Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

 td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>";
	         $query ="select * from review where pages='".$_GET['data']."'";
			 $sql=mysqli_query($conn,$query);
             			 
			 echo "<table><tr><th>Name</th><th>Rate</th><th>Comments</th> <th>Email</th></tr>";
			 while($row=mysqli_fetch_object($sql))
			 {
			  echo "<tr><td>$row->name</td><td>$row->rate</td><td>$row->comments</td><td>$row->email</td><tr>";
					 
			 }
			echo "</table>";
		 }
			 
?>
  </div>
 </div>
</div>
<br>
<br>
<br>

</body>
</html>



<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    #here{
		width:260px;
		height:160px;
		display:none;
	}
	#here a
	{   display:block;
	    width:250px;
		font-size:20px;
	}
	body{background-color:#B4B4B4;}

</style>

</head>
<body>
<div class="container" >
	<div class="row">
		<div class="col-md-12">
		<form action="" method="post" id="myform">
		    <div class="form-group" style="background-color:#FACBA8;">
			<label for="sel1"><h3>Select District</h3></label>
				<select name="value" onChange="myFunction()" class="form-control" id="sel1">
					<option value="select"  > Select </option>		
					<option value="chennai" >Chennai</option> 
					<option value="madurai" >Madurai</option> 
					<option value="covai"   >Covai</option> 
					<option value="trichy"  >Trichy</option> 
				</select> 
			</div>
		</form>
		
		

		<script>
		function myFunction()
		 {
			document.getElementById('myform').submit();
		 }
		</script>

		</div>
	</div>
</div>

<!--------------------------------------------------------->


<div class="container">
 <div class="row">
    <div class="col-md-12">
			<?php
	if(isset($_POST['value'])) {
		session_start();
		include("db.php"); 
		$table = $_POST['value']; 
        $_SESSION['table']=$table;
        echo "<h2>Search ".$_SESSION['table']." Restaurants here!!..";		
		/*
		$query = "SELECT * FROM $table"; 
		$sql=mysqli_query($conn,$query);
		while($row=mysqli_fetch_object($sql))
		{
		   echo $row->pages;//we can print all values
		}*/
}
?>
        </div>
		<div class="col-md-12">
		    <div class="form-group">
			       <input type="search" name="search" id="search"
				   class="form-control" placeholder="Search Selected District Restaurants">
			</div>
		</div>
		<div class="col-md-12" id="here">
			 
	   </div>
	   
 </div>
</div>

<script>
 $(document).ready(function(e)
 {
	//alert("test");
	$("#search").keyup(function()
	{
	  $("#here").show();
      var x = $(this).val();
      $.ajax(
	  {
		type:"GET",
		url:"fetch.php",
		data:"q="+x,
		success:function(data)
		{
		  $("#here").html(data);	
		},
	  }
	  );	  
	});	
 });			
</script>

</body>
</html>
<?php
session_start();
if(!isset($_SESSION['name'])){
	header('location:login.php');
}
$con=mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'quizdbase');

?>
<html>
<head>
	<title>HomePage</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<br><h1 class="text-center">WEBDEVELOPER QUIZ</h1>
<h2 class="text-center text-success">Welcome, <?php echo $_SESSION['name'];?></h2><br>
<center>
<div class="card">
	<h3 class="text-center card-header">Welcome  <?php echo $_SESSION['name'];?>,you have to select only one out of 4 ,Best of Luck!</h3>

</div><br></center>
<div class="col-xs-6 col-xs-offset-3">
<form action="check.php" method="post"> 
<?php
for ($i=1; $i <6; $i++) { 

$q="select * from question where qid=$i";
$query=mysqli_query($con,$q);
while ($rows=mysqli_fetch_array($query)) {
	?>

	<div class="card">
		<h4 class="card-header"><?php echo $rows['question'];?>    </h4>
			<?php

  					$q="select * from answers where ans_id=$i";
					$query=mysqli_query($con,$q);
					while ($rows=mysqli_fetch_array($query)) {
					?>
					<div class="card-body">
						<input type="radio" name="quizcheck[<?php echo $rows['ans_id'] ;?>]" value="<?php echo $rows['aid']; ?>">
						<?php
							echo $rows['answer'];
						?>
						
					</div>

			

	
	<?php
}
}
}

?>
<div>
	<center>
<input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg m-auto">
	</center>
</div>
</form>
</div><br><br>

<div>
	<center>
		<a href="logout.php" class="btn btn-warning btn-lg m-auto ">LOGOUT</a>
	</center>
</div>
</div>
</body>
</html>
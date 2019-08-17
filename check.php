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
      <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > Webdeveloper Quiz World</h1>
    	<br><br><br><br>
    	 

      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>
		      	<?php
         $counter = 0;
         $result= 0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
           
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST);
            ?>

        	<td>
            <?php
            echo "Out of 5, You have attempt ".$checked_count." option."; ?>
            </td>
        
          	</tr>
            <?php
            
            $selected = $_POST['quizcheck'];
            
            $q1= " select * from question ";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
              // print_r($rows);
            	$flag = $rows['ans_id'] == $selected[$i];
            	
            			if($flag){            								
            				$counter++;
            				$result++;
            				
            			}else{
            				$counter++;
            				
            			}					
            		$i++;		
            	}}}$u=($result*100)/5;
            	?>
	

<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php 
	    	if(!empty($_POST['quizcheck'])){
	            echo " Your score is ". $result.".";
	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	             
	          ?>
	          </td>
            </tr>

            <?php 

            $name = $_SESSION['name'];
            $finalresult = " insert into user(username,totalques,anscorrect) values ('$name','5','$result') ";
            $queryresult= mysqli_query($con,$finalresult); 
            // if($queryresult){
            // 	echo "successssss";
            // }
            ?>


      </table>
       <h2>Progress Bar</h2>
  <div class="progress" style="height: 25px;">
    <div class="progress-bar progress-bar-striped active" role="progressbar" style="width: <?php echo $u; ?>%">
     <?php
echo $u."%";

     ?>
    </div>
  </div>
      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>


<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
      <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
           <div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                        </ul>
                    </div>
               
           </div>
       </nav>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-7">                   
                    <h1>SIGN UP</h1>
                    <form action="registration.php" method="post">
                        
                        <div class="form-group" align="center">
                            
                            <input type="text" class="form-control" name="name" placeholder="UserName">
                        </div>
                         
                            <div class="form-group">
                                
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                       
                            <button type="submit" class="btn btn-primary">Submit</button> 
                    </form>
                </div>                   
            </div>
        </div>
        
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
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
       </nav>    <br><br>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-success" >
                        <div class= "text-center panel-heading">
                           <h4>Login</h4>
                        </div>
                        <div class="panel-body text-warning">
                        
                        <form action="validation.php" method="post">
                       

                            <div class="form-group">
                               <span class="glyphicon glyphicon-user"> <label for="UserName"><h4>UserName</h4></label></span>
                                <input class="form-control" name="name" type="text"> 
                            </div>
                            <div class="form-group">
                               <span class="glyphicon glyphicon-lock"> <label for="password"><h4>Password</h4></label></span>
                               <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button> 
                        </form>   
                    </div>
                        <div class="panel-footer">
                            <a href="signup.php">Don't have an account? Register</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>         
    </body>
</html>

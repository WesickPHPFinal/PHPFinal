<?php include './bootstrap.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<!--Page Title-->
    <title> Game Names</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CDN's for Bootstrap, Font Awesome Includes CSS and JS scripts -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--Custom JavaScript file references -->
    <script src="../PHPFinalMeWes/js/siteJS.js"></script>
    <script type="text/javascript" src="../PHPFinalMeWes/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../PHPFinalMeWes/js/bootstrap.min.js"></script>
    <!-- Custom CSS file references -->
    <link rel="stylesheet" type="text/css" href="../PHPFinalMeWes/css/stylesheet.css" rel="stylesheet">
</head>
     
<body>
    
    
     <?php
        
            $util = new Util();
            
            if ( $util->isPostRequest() ) {
                $db = new DB($dbConfig); 
                $model = new SignupModel();
                $signupDao = new SignupDAO($db->getDB(), $model);            

                $model->map(filter_input_array(INPUT_POST));
                                
                if ( $signupDao->create($model) ) {
                    echo '<h2>Signup complete</h2>';
                } else {
                    echo '<h2>Signup Failed</h2>';
                }
            }
           
            
        ?>    
        
<!--  Navigation div -->
<section id="Navigation">        
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#">Game Name Manager</a>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
                <!--  Tournament Dropdown Menu Begin  -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Game Manager<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">My Games</a></li>
                    <li><a href="#">Add a game</a></li>  
                    </ul>
                </li>
                <!--  End of Tournament Dropdown Menu  -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="signUpButton"><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="logInButton"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
        </div>
    </nav>
</section>    
<!-- End of Navigation div  -->
        <section id="SignUp Div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-3 col-sm-4 col-sm-offset-1  col-xs-4 col-xs-offset-1">        
                        <h1>Signup</h1>
        <form action="#" method="POST">
            User Name: <input type="text" name="userName" value="" /> <br />
            Email : <input type="email" name="email" value="" /> <br />
            Password : <input type="password" name="password" value="" /> <br /> 
            <br />
            <input type="submit" value="Signup" />
            
        </form>
                    </div>
                </div>
            </div>
        </section>
    
   
        
    <!--Footer-->
    <section id="Footer">
        <div class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="footer">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="copyright navbar-text">
                       ©2015 Warp-Nine-Gaming
				       <a href="https://www.facebook.com/#" target="_blank"><i class="fa fa-facebook-square fa-2x img_icon"></i></a>
				       <a href="https://twitter.com/MisterSpock2n" target="_blank"><i class="fa fa-twitter-square fa-2x img_icon"></i></a>
				       <a href="https://www.youtube.com/c/NickRajotte" target="_blank"><i class="fa fa-youtube fa-2x img_icon"></i></a>
				    </p>
				</div>
			 </div>
        </div>
    </section>
    <!--  End of Footer Div  -->
    
    
</body>
</html>
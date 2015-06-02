<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<!--Page Title-->
    <title>Warp Nine Game Names</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CDN's for Bootstrap, Font Awesome Includes CSS and JS scripts -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--Custom JavaScript file references -->
    <script src="js/siteJS.js"></script>
    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- Custom CSS file references -->
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" rel="stylesheet">
</head>
     
<body>
    
    <!--  End of Page Load Scripts --> 
        
        
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
            <a class="navbar-brand" href="#">Warp Nine Game Names</a>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
                <!--  Tournament Dropdown Menu Begin  -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Game Manager<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="gamemanager.html">My Games</a></li>
                    <li><a href="gameAdd.html">Add a game</a></li>  
                    </ul>
                </li>
                <!--  End of Tournament Dropdown Menu  -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="signUpButton"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="logInButton"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
        </div>
    </nav>
</section>    
<!-- End of Navigation div  -->
        
        
    
            
      <section id="gamemanager">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <form>
                        Game Name: <input type="text" name="gameName"><br>
                        In Game Name: <input type="text" name="inGameName"><br>
                        Login Name: <input type="text" name="logInName"><br>
                        Login Password: <input type="password" name="gameName"><br>
                        Confirm Password: <input type="text" name="logInName"><br>
                        <input type="submit" value="Submit" name="gameSubmit">
                        
                    </form>
                    <br><br>
                    <table style="width:100%">
                        <tr>
                            <td>Game Name:</td>
                            <td>In-Game Name:</td> 
                            <td>Note:</td>
                            <td>Edit:</td>
                        </tr>
                        <tr>
                            <td>Smite</td>
                            <td>MisterSpock</td> 
                            <td>Main Account</td>
                            <td>Edit | Delete</td>
                            </tr>
                        <tr>
                            <td>League of Legends</td>
                            <td>MisterSp0ck</td> 
                            <td>Main Account</td>
                            <td>Edit | Delete</td>
                            </tr>
                        <tr>
                            <td>League of Legends</td>
                            <td>MisterSp0ckJr</td> 
                            <td>Alt Account</td>
                            <td>Edit | Delete</td>
                            </tr>
                        </table>
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
    
     </div>
    </section>    
    <!--  End of LogInUp Div  -->
        
        </div>
    </section>
    <!--  End of Signup Div -->
</body>
</html>
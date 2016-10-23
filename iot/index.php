<!DOCTYPE html>
  <html>
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="materialize.css">
		<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	</head>
	<body>
	
		<div id="wrap" style="background-color:#F8F9F9">
		<?php
	
	session_start();
	error_reporting(0);
	include 'conf.php';
		if(isset($_SESSION['usr']))
		{
	$email=$_SESSION['usr'];
$rs=mysqli_query($con,"select * from mode where email='$email';") ;
		$result=mysqli_fetch_array($rs);
		$_SESSION['mode']=$result['mode'];
		
		
	?>
			<div id="header">
			
			<img src="logo.png">
			</div>
			<center><div id="menu">
			
				<ul>
					<li>
						<a href="index.php" class="selected">Home</a>
					</li>
					<li>
						<a href="pumpset.php">Dashboard</a>
					</li>
					<li>
						<a href="washarea.php">Music</a>
					</li>
					<li>
						<a href="statistics.php">Color Play</a>
					</li>
					<form action="logout.php" method="POST">
						<input type="submit" name="logout" id="logout" value="Logout" class="waves-effect waves-light btn" style="float:right">
					</form>
				</ul>
				<div class="clear"></div> 
			</div></center>
			<div id="main">
				<div id="content">
					<div class="slider">
    <ul class="slides">
      <li>
        <img src="SLIDER1.jpg"> <!-- random image -->
        <div class="caption ">
		 <h3 class="dark blue-text">Automatic Lights</h3>
          <h5 class="dark  " >Feel free to move around</h5>
          
        </div>
      </li>
      <li>
        <img src="SLIDER2.jpg"> <!-- random image -->
        <div class="caption ">
         <h3 class="dark blue-text">&nbsp Wi-Fi switch</h3>
          <h5 class="dark brown-text " >Switch board at your finger tips</h5>
        </div>
      </li>
       <li>
        <img src="SLIDER3.jpg"> <!-- random image -->
        <div class="caption "><br><br><br>
          <h3 class="dark blue-text">Party mode</h3>
          <h5  >Lights and Music</h5>
        </div>
      </li>
	   <li>
        <img src="SLIDER4.jpg"> <!-- random image -->
        <div class="caption "><br><br><br>
          <h3 class="dark blue-text">Secure</h3>
          <h5 class="dark white-text " >Motion detectiom notification with SAFE MODE</h5>
        </div>
      </li>
    </ul>
  </div>
				</div>
				<div id="side">
			<center>	<strong><font size="5px"> Mode Selection</font></strong>
				<form action="modeprocess.php" method="POST">
    <p>
      <input class="with-gap" name="group1" type="radio" id="rdefault" value="default" >
      <label for="rdefault">Default Mode</label>
    </p>
    <p>
      <input class="with-gap" name="group1" type="radio" id="rsafe"value="safe"/>
      <label for="rsafe">Safe Mode</label>
    </p>
    <p>
      <input class="with-gap" name="group1" type="radio" id="rparty"  value="party"/>
      <label for="rparty">Party Mode</label>
    </p>
      <p>
        <input class="with-gap" name="group1" type="radio" id="rdisable" value="disable" />
        <label for="rdisable">Disable Mode</label>
    </p><br>
	<input type="submit" name="msubmit" value="SELECT" class="waves-effect waves-light btn">
	<br>
  </form>
  <br><center>	<strong><font size="5px"> Add Sub User</font></strong>
 <form action="newsubuserprocess.php" method="POST">
 <div class="input-field col s6">
 
          <input id="tuname" type="text" class="validate" name="tuname">
          <label for="tuname">Username</label>
        </div>	
		<div class="input-field col s6">
          <input id="tpass" type="password" class="validate" name="tpass">
          <label for="tpass">Password	</label>
        </div>	
		<input type="submit" name="nusubmit" value="create" class="waves-effect waves-light btn">
				</form>
				
				</div>
				
				<div class="clear"></div>
			</div>
			<!--<div id="footer">
			 © Registered trade mark<a href="http://www.twitter.com" target="_blank"><img style="float:right"src="http://static.viewbook.com/images/social_icons/tumblr_32.png"></a>
			 <a href="http://www.facebook.com" target="_blank"><img style="float:right"src="http://static.viewbook.com/images/social_icons/facebook_32.png" ></a>
			</div> -->
			<footer class="page-footer" style="color:#fff;background:#008ca6;">
          <div class="container" >
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">IoT Automation</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="pumpset.php">Dashboard</a></li>
                  <li><a class="grey-text text-lighten-3" href="washarea.php">Music</a></li>
                  <li><a class="grey-text text-lighten-3" href="statistics.php">Statistics</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            &copy; 2016 Bharath. R
            <a class="grey-text text-lighten-4 right" href="https://Facebook.com">Facebook</a>
            </div>
          </div>
        </footer>
            
			
		</div>
	</body>
	<script type="text/javascript">
	 $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });


	var name = '<?php echo $_SESSION['mode'] ?>';
	
	if(name=='default')
	{
		document.getElementById("rdisable").checked = false;
		document.getElementById("rparty").checked = false;
		document.getElementById("rsafe").checked = false;
		document.getElementById("rdefault").checked = true;
		
	}
	else if(name=='safe')
	{
				document.getElementById("rdefault").checked = false;
		document.getElementById("rdisable").checked = false;
		document.getElementById("rparty").checked = false;
		document.getElementById("rsafe").checked = true;
		
	}
	else if(name=='party')
	{
		document.getElementById("rdisable").checked = false;
		document.getElementById("rsafe").checked = false;
		document.getElementById("rdefault").checked = false;
		document.getElementById("rparty").checked = true;
		
	}
	else
	{
		document.getElementById("rparty").checked = false;
		document.getElementById("rsafe").checked = false;
		document.getElementById("rdefault").checked = false;
		document.getElementById("rdisable").checked = true;
		
	}
	
	</script>
	<?php
	if($_GET['message']=='1')
			echo "<script type='text/javascript'>alert('User created successfully!!!');</script>";
		else if($_GET['message']=='2')
			echo "<script type='text/javascript'>alert('User not created!!!');</script>";
		else if($_GET['message']=='3')
			echo "<script type='text/javascript'>alert('Mode selection successfull!!!');</script>";
		}
	?>
</html>
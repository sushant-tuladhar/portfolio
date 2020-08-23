<!DOCTYPE html>
<html>
<head>
	<title>Welcome to my page</title>
	<style type="text/css"> 
		body{
			background: #E9EBEE;
			opacity: 1;
		}
		#topHeaderBar{
			margin:-15px -25px -25px -15px;
			width: 101vw;
			height:60px;
			background: #29303B;
			position: overlay;
			display: block;
		}
		center{
			margin-top: -15px;
		}
		#introduction{
			margin-top: 15px;
		}
		#imageCenter{
			margin-top: 35px;
			text-align: center;
			width: 200px;
			margin-left: 40%;
		}
		#main_picture{
			border: 2px solid black;
			border-radius: 5px;
		}
		#searchWebSite{
			margin-left: 10%;
			background: #E9EBEE;
			border-radius: 5px;
			height: 25px;
			width: 20%;
			margin-top: 17px;
			font-size: 13px;
			padding: 1px;
			padding-left: 10px;

		}
		#searchButtonDiv{
			
		}
	</style>
</head>
<body>
	<div id="topHeaderBar">

		<input type="text" name="searchWebSite" id="searchWebSite" placeholder="Enter the text to search here">
		<div id="searchButtonDiv">
		</div>
	<!--	<center> 
			<?php 
				echo "Hello world this is sushant and my site is in progress";
		?>
	</center> -->
	</div>
	<div id="imageCenter">
		<center>
			<img id="main_picture" src="image.jpg" height="500px"  alt="Image_not_found">
		</center>
	</div>
	<div id="introduction">
		<center>
		<code>
			Hello, I am Sushant Tuladhar. 
			<br> 
			I am a Software Engineer graduated from Pokhara University.
			<br>
			I have been working as an QA Engineer in SynergyTech Software for the past 3 years. 
		</code>
	</center>
	</div>
	
	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the product page</title>
	<style type="text/css">
		body{
			
			box-sizing: border-box;
			font-family: Arial;
		
		}
		#topHeader{
			position: fixed;
			z-index: 1;
			height:9%;
			background-color: #DCD41A;
			top: 0;
			left: 0;
			right: 0;
			overflow: hidden;
		}
		#searchInput{
			border:none;
			border-radius: 5px;
			position: absolute;
			top:10px;
			bottom:5px;
			height: 50%;
			width: 20%;
			left: 10%;
			padding: 5px;
			padding-left: 15px;

		}
		#searchInputDiv{
			width: 20%;
			display: inline;
		}
		#menus{
			display: inline;
			float:right;
			margin-right: 5%;
			margin-top:3px;
		}
		ul{
			list-style-type: none;
			color:white;
			font-weight: lighter;
		}
		li{
			display: inline;
			padding: 15px;
		}
		li:hover{
			background: #282923;
		}
		#main_container{
			height: 900px;
			margin-top: 5%;
		}
		#hot_products{
			width:100%;
			display: block;
			height:300px;
		}
		.newhot{
			display: inline;
			box-sizing: border-box;
			padding:1%;
			height:inherit;
			/*border-style: outset; */
		}
		h3{
			color:black;
		}
		a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<div id="topHeader">
		<img src="shopping-512.png" alt="Image not found" height="80%" width="7%" style="margin:5px;">
		<div id="searchInputDiv">
			<input type="text" name="searchInput" id="searchInput" placeholder="Enter the product name here" maxlength="20" minlength="3">
		</div>
		<div id="menus">
			<ul>
				<a href="#footer"><li>Home</li></a>
				<li>Menu</li>
				<li>Products</li>
				<li>Login</li>
				<li>Signup</li>
			</ul>		
		</div>
	</div>

	<div id="main_container">
		<br>
		<h3>&#9;Hot products today</h3>
		<div id="hot_products">
			<img src="fresh.jpg" width="33%" class="newhot">
			<img src="fresh.jpg" width="33%" class="newhot">
			<img src="fresh.jpg" width="33%" class="newhot">
		</div>
	</div>
	<div id="footer">
		Footer page here.
	</div>

</body>
</html>
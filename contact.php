<!Doctype html>
<html lang='en-US'>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" media="(min-width: 760px) and (max-width: 979px)" href="mycss/style_medium.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 320px) and (max-width: 795px)" href="mycss/style_small.css">
		<link rel="stylesheet" type="text/css" media="(min-width: 980px)" href="mycss/style.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<title>OUAT | Contact</title>
	</head>

	<body>
	<div id="main">
	
		<div class="header">
			<h1 id="header">Once Upon a Time</h1>
		</div>

		<div id='menu'>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href='about.html'>About</a></li>
				<li><a href='library.html'>Library</a></li>
				<li><a href='newReleases.html'>New Releases</a></li>
				<li class='active'><a href='#'>Contact</a></li>
				
				<div class="search">
					<input type = "search" id="searchq" name="searchHere"
						size="30" placeholder = "Search by Author name">
		
					<img src='icons/search1.png' width='20' onclick="this.src='icons/search2.png';" onmouseout="this.src='icons/search1.png';" >
				</div>
			</ul>
		</div>
		
		<div class="content_contact">
				
			<h2>Contact</h2>
				<hr id="hr2"/>
				<br/>
			
			<div id="icons">
			
				<a href="http://www.twitter.com/OnceUponATime" target="_blank"><img class="icons" class="hvr-grow" src="icons/tw.png"></a>
				<a href="https://plus.google.com/OnceUponATime" target="_blank"><img class="icons" class="hvr-grow" src="icons/g+.png"></a>
				<a href="http://www.facebook.com/OnceUponATime" target="_blank"><img class="icons" class="hvr-grow" src="icons/fb.png"></a>
				<a href="http://mail.google.com" target="_blank"><img class="icons" class="hvr-grow" src="icons/gm.png"></a>
			
			</div>
			
			<form id="form" action="contactHandler.php" method="post">

				<h3 id="form-title">Please fill in the form below:</h3>

					<table align="center" cellpadding="3">
				
						<tr>
							<td><label for="fname">Firstname:</label></td>
							<td><input type="text" name="firstname" id="fname"></td>
						</tr>
			
						<tr>
							<td><label for="lname">Lastname:</label></td>
							<td><input type="text" name="lastname" id="lname"></td>
						</tr>
				
						<tr>
							<td><label for="years">Age:</label></td>
							<td><input type="text" name="age" id="years"></td>
						</tr>

						<tr>
							<td><label>Gender:</label></td>
							<td>
								<input type="radio" name="gender" id="rd1" value= "female">Female
								<input type="radio" name="gender" id="rd2" value= "male">Male
							</td>	
						</tr>
				
						<tr>
							<td><label for="e-mail">E-mail:</label></td>
							<td><input type="email" id="e-mail" name="email"></td>
						</tr>
		
						<tr>
							<td><label>Comments:</label></td>	
							<td>
								<textarea rows="10" cols="30" name="comments" id="comment"></textarea>
							</td>
						</tr>
			
			
						<tr>
							<td colspan="2" align="center" id="buttons">
								<input class="button" type="submit" value="Submit">
								<input class="button" type="reset" value="Cancel">
							</td>
						</tr>
				
					</table>		
			
			</form>

		</div>

		<div class="footer">
			<p>&copy Copyright 2015 - OUAT</p>
		</div>
		
	</div>
	</body>
		<script src="JavaScript/jindex.js"></script>
<html>

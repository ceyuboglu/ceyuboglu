<!DOCTYPE html>

<html style="font-family: 'Ubuntu', sans-serif; height: 100vh; width: 100vw;">
<head>
<title>Cüneyt Eyüboğlu</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">


</head>
<body>

	<div id="headerwrapper">
		<a href="index.php">

		<img src="upload/<?php echo $ayarcek['leftbar_photoname']; ?>">
		</a>
		<h1>Cüneyt Atahan Eyuboglu</h1>
		<h2>Hacettepe University | Mathematics</h2>
		<span>Undergraduate Student</span>
		<nav>
			<ul>
									<li id=tw>
											<a href="https://twitter.com/ceyuboglu" class="social" target="_blank">
													<i class="fa fa-twitter"></i>
											</a>
									</li>
									<li id=inst>
											<a href="https://instagram.com/ceyuboglu" class="social" target="_blank">
													<i class="fa fa-instagram"></i>
											</a>
									</li>
									<li id=fb>
											<a href="https://www.facebook.com/cuneyts61" class="social" target="_blank">
													<i class="fa fa-facebook"></i>
											</a>
									</li>
									<li id=lin>
											<a href="https://www.linkedin.com/in/c%C3%BCneyt-atahan-ey%C3%BCbo%C4%9Flu-272b4a100/" class="social" target="_blank">
													<i class="fa fa-linkedin"></i>
											</a>
									</li>
									<li id=gh>
											<a href="https://github.com/ceyuboglu" class="social" target="_blank">
													<i class="fa fa-github"></i>
											</a>
									</li>


							</ul>
		</nav>

	<div id="menu">
	<ul style="list-style-type: none; ">
		<li>
			<a id="sect2button" href="#section2" style="color: white; text-decoration: none;">Skills</a>
		</li>
		<li>
			<a href="#section3" style="color: white; text-decoration: none;">Mail Me!</a>
		</li>
		<!--<li>
			<a href="ask.php" style="color: white; text-decoration: none;">Ask me</a>
		</li> -->
	</ul>
	</div>

	<footer>

	<span>2018 | Cüneyt Atahan Eyüboğlu</span> <br>

	<br>
	<br>

			 <h5><?php echo $ayarcek['leftbar_footer']; ?></h5>
	</footer>
	</div>



	<div id="wrapper">
		<div class="bg" id="section1">
		<div class="content"><span style="font-size: 50px;">Who Am I</span><br>
			<hr style="width:50vw;">
			<ul>
				<span>I am a mathematics student at Hacettepe University.<br>I am interested in:</span>
				<li>Programming</li>
				<li>Chess</li>
				<li>Science and Technology</li>
				<li>Mathematics</li>
				<li>Games</li>
			</ul>
		</div>

		</div>
		<div class="bg" id="section2">
			<div class="content"><span style="font-size: 50px;">My Skills</span>
				<hr style="width:50vw;">
			<p style="text-align: left;">
			<ul>
				<span style="color:black;"><b>>I'm Perfect At:</b></span>
				<li>Sleeping..z<span style="font-size:35px;">z</span><span style="font-size:40px;">Z</span></li>

				<span style="color:black;"><b>>I can do somethings at:</b></span>
				<li>HTML/CSS</li>

				<span style="color:black;"><b>>I'm Low/Noob At:</b></span>
				<li>JavaScript,PHP,SQL,Python,C</li>
			</ul>
			 </p>
			</div>
		</div>
		<div class="bg" id="section3">
			<div class="content">
			<form id="mailform" method="POST" action="mail.php">
             <p style="font-size: 50px; font-weight: 800; color: #D7D7D7;">MAİL FORM</p>
             <div class="form-group">
                  <input type=text placeholder="First Name" name="first_name" >
              </div>
              <div class="form-group">
                  <input type=text placeholder="Last Name" name="last_name">
              </div>
              <div class="form-group">
                  <input type=text placeholder="E-mail" name="email">
              </div>
              <div class="form-group">
                  <textarea maxlenght="100" rows="5" placeholder="Write your message here..." name="message" ></textarea>
              </div>
              <div class="form-group">
                  <input type="submit" value="Send" id="gonderbtn" name="gonderbtn">
              </div>

          </form>



			</div>
		</div>


	</div>
</body>




</html>

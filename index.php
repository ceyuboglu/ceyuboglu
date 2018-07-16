<?php
include 'header.php';

?>


	<div id="wrapper">
		<div class="bg" id="section1">
		<div class="content"><span style="font-size: 50px;">Who Am I</span><br>
			<hr style="width:50vw;"><?php /*
			<ul>
				<span>I am a mathematics student at Hacettepe University.<br>I am interested in:</span>
				<li>Programming</li>
				<li>Chess</li>
				<li>Science and Technology</li>
				<li>Mathematics</li>
				<li>Games</li>
			</ul>
			*/ ?>
			<p><?php echo $ayarcek['blog_section1'] ?></p>
		</div>

		</div>
		<div class="bg" id="section2">
			<div class="content"><span style="font-size: 50px;">My Skills</span>
				<hr style="width:50vw;">
			<p style="text-align: left;">
			<?php
			echo $ayarcek['blog_section2'];

			  /*
			<ul>
				<span style="color:black;"><b>>I'm Perfect At:</b></span>
				<li>Sleeping..z<span style="font-size:35px;">z</span><span style="font-size:40px;">Z</span></li>

				<span style="color:black;"><b>>I can do somethings at:</b></span>
				<li>HTML/CSS</li>

				<span style="color:black;"><b>>I'm Low/Noob At:</b></span>
				<li>JavaScript,PHP,SQL,Python,C</li>
			</ul> */
			?>
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

<?php

$ip_adres = $_SERVER["REMOTE_ADDR"];

$ipkayit = fopen("ip_kayit.txt", "a");

fwrite($ipkayit,"$ip_adres<br>") ;

?>



</html>

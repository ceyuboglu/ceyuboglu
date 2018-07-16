  <?php
include 'cadmin/panel/airport/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM kisisel where item_id=:id");
$ayarsor->execute(array(
  'id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>

<html style="font-family: 'Ubuntu', sans-serif; height: 100vh; width: 100vw;">
<head>
	<title>Cüneyt Eyüboğlu</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

		<div id="headerwrapper">
			<a href="index.php">

			<img src="upload/<?php echo $ayarcek['leftbar_photoname']; ?>">
			</a>
			<h1><?php echo $ayarcek['leftbar_fullname']; ?></h1>
			<h2><?php echo $ayarcek['leftbar_schooldept']; ?></h2>
			<span><?php echo $ayarcek['leftbar_subtext']; ?></span>
			<nav>
				<ul>
                    <li id=tw>
                        <a href="https://twitter.com/<?php echo $ayarcek['blog_twitter'];?>" class="social" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li id=inst>
                        <a href="https://instagram.com/<?php echo $ayarcek['blog_instagram'];?>" class="social" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li id=fb>
                        <a href="https://www.facebook.com/<?php echo $ayarcek['blog_facebook'];?>" class="social" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li id=lin>
                        <a href="https://www.linkedin.com/in/<?php echo $ayarcek['blog_linkedin'];?>" class="social" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li id=gh>
                        <a href="https://github.com/<?php echo $ayarcek['blog_github'];?>" class="social" target="_blank">
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

		<span><?php echo $ayarcek['blog_sub']; ?></span> <br>

		<br>
		<br>
		<?php
		if (isset($_GET['mail']))  {
              	if ($_GET['mail']=='yes'){ ?>
              		<b style="color: green;">Mail succesfully sent</b>

              <?php }  else { ?>
              		<b style="color: red;">Mail sent error.Please check fields</b>

              <?php }
              }
               ?>
         <br><br>
         <h5><?php echo $ayarcek['leftbar_footer']; ?></h5>
		</footer>
    </div>

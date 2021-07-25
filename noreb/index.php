<!doctype html>
<html lang=en>
<head>
<title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
<meta charset=utf-8>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id='container'>
<?php require_once("includes/header.php")?>
<div id ="menu">
		      <?php
			     $menu='nav.php';
				 if(file_exists($menu)&& is_readable($menu))
				 {
				    include_once($menu);
				 }
			  ?>
		   </div>

<div id='content'>
				 <script type="text/javascript">
						<!--
						var image1=new Image()
						image1.src="images/cities.jpg"
						var image2=new Image()
						image2.src="images/tourist.jpg"
						var image3=new Image()
						image3.src="images/stays.jpg"
						var image4=new Image()
						image4.src="images/cars.jpg"
						//-->
						</script>
						<img src="cities.jpg" name="slide" width="900" height="400"/>
						<script>
						<!--
						//variable that will increment through the images
						var step=1
						function slideit(){
						//if browser does not support the image object, exit.
						if (!document.images)
						return
						document.images.slide.src=eval("image"+step+".src")
						if (step<4)
						step++
						else
						step=1
						//call function "slideit()" every 2.5 seconds
						setTimeout("slideit()",2500)
						}
						slideit()
						//-->
						</script>
                        <p>NorthRift Economic Bloc (NOREB) is a Consortium of five(5) counties that came into existence to bring forth Natures beauty to Man. Discover and experience the rustic and serene environment with wonderful 
						   tourist attractions sites from NOREB region compared to other regions like Nairobi,Coastal part of Kenya and its Environs.</p>
						<p>NOREB is suitable for Investors both Local and International,Persons looking for that ambience of a place with cooling effect and Tourists who want to explore what nature has to offer.Indeed the
						    universe  has endowed us with wonders come and enjoy the tranquil of NOREB Region</p>
				  <div class="clear"></div>
                  <div class="line-hor"></div>
				  <center><b>Connect with us through the following social media tools.</b></center><p>
				  <center><a href="http://www.facebook.com/profile.php?id=100000494597097" target="_blank"><img src="images/fbk.jpg" width="100" height="50"></center>
				  <center><a href="https://twitter.com/" target="_blank"><img src="images/twitter.jpg" width="100" height="50"></center>
				  <center><a href="https://www.linkedin.com/" target="_blank"><img src="images/likedln.png" width="100" height="50"></center>
                  </div>
</div>
<?php require_once("includes/footer.php")?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <?php require_once("includes/header.php");?>
        <div id="menu">
            <?php 
                $menu = 'nav.php';
                if(file_exists($menu) && is_readable($menu)){
                    include_once($menu);
                }
            ?>
        </div>

        <div id="content">
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
                <p>NorthRift Economic Bloc (NOREB) is a Consortium of Fine(5) counties that come into existence to bring forth Natures beauty to man. Discover the experience and serene environment with wonderful
                tourist attractions sites from NOREB region compared to other regions like Nairobi, Coastal part of kenya and its Environs.</p>
                <p>NOREB is suitable for Investors both local and International, Persons for that ambience odf aplace with coolinf effect anf tourists who want ot explore what nature has to offer.
                Indeed the universe has endored us with wonders come and enjoy the tranquil of NOREB Region.</p>
                <div class="clear"></div>
                <div class="line-hor"></div>
                <center><b>Connect with us throug the following social media tools.</b></center><p>
                <center><a href="" target="blank"><img src="images/fbk.jpg" width="100" height="50" alt=""></a></center>
                <center><a href="" target="blank"><img src="images/twitter.jpg" width="100" height="50"  alt=""></a></center>
                <center><a href="" target="blank"><img src="images/likedln.png" width="100" height="50"  alt=""></a></center>
            </div>
    </div>
</div>
    <?php require_once("includes/footer.php") ?>
</body>
</html>
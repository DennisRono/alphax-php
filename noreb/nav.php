<ul>
<li><a href="index.php" title="Return to Home Page">Home</a></li>
<?php if (isset($_SESSION['user_level'])) { ?>
<li><a href="stays.php" title="Places to stay">Stays</a></li>
<li><a href="attractions.php" title="Check tourist attraction sites">Tourists Attactions</a></li>
<?php } ?>
<li><a href="carrentals.php" title="Car rentals for any kind of trip">Car Rentals</a></li>
</ul>
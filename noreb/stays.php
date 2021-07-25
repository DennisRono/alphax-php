<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stays.css">
</head>
<body>
    <div id="container">
        <?php include_once("includes/header-members.php"); ?>
        <div class="form">
            <h3>Search for your dream place to stay</h3>
            <p>IMPORTANT: You must select an item in ALL the fields, otherwise the search will fail.</p>
            <form action="dreams.php" method="post">
                <p>
                    <label for="location" class="label"><b>Location:</b></label><br>
                    <select name="loctn" id="">
                        <option value="">-select-</option>
                        <option value="Uasingishu">Uasin Gishu</option>
                        <option value="Marakwet">Marakwet</option>
                        <option value="Nandi">Nandi</option>
                    </select><br>
                </p>
                <p>
                    <label for="" class="label"><b>Price:</b></label><br>
                    <select name="price" id="">
                        <option value="">-select-</option>
                        <option value="10000">10000</option>
                        <option value="20000">20000</option>
                        <option value="30000">30000</option>
                        <option value="40000">40000</option>
                    </select><br>
                </p>
                <p>
                    <label for="" class="label"><b>Type:</b></label><br>
                    <select name="type" id="">
                        <option value="">-select-</option>
                        <option value="houses">Bungalow House</option>
                        <option value="apartment">Detached apartments</option>
                        <option value="cottages">Exclusive cottages</option>
                    </select><br>
                </p>
                <p>
                    <label for="" class="label"><b>bedrooms:</b></label><br>
                    <select name="b_rooms" id="">
                        <option value="">-select-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select><br>
                </p>
                <p><input type="submit" name="submit" value="search"></p>
            </form>
        </div>
        <div id="content">
            <h2>Welcome to Noreb a Place to get ready homes to settle in😂</h2>
            <img src="./images/map.jpg" name="slide" width="900" height="400"/>
        </div>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>
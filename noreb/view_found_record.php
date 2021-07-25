<!doctype html>
<html lang=en>
<head>
<title>NOREB MARKETING AND LODGING RESERVATION SYSTEM</title>
<meta charset=utf-8>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
p.error { color:red; font-size:105%; font-weight:bold; text-align:center;}
table { width:900px; border-collapse:collapse; }
</style>
</head>
<body>
<div id='container'>
<?php require_once("includes/header-listing.php")?>
<div id='content'>
<h2>Search Result</h2>
<?php
// This code fetches a record from the houses table
require ('includes/config.php'); // Connect to the db
$ref_num=$_POST['ref_num'];
$q = "SELECT ref_num, loctn, thumb, price, type, mini_descr, b_rooms, status 
FROM stays WHERE ref_num='$ref_num' ";
$result = @mysqli_query ($dbcon, $q); // Make the query.
if ($result) { // If the query ran OK, display the record
// Table header
echo '<table>
<tr>
<td><b>Ref_Num</b></td>
<td><b>Image</b></td>
<td><b>Price</b></td>
<td><b>Features</b></td>
<td><b>Bedrms</b></td>
<td><b>Status</b></td>
</tr>';
// Fetch and display the record
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
echo '<tr>
<td>' . $row['ref_num'] . '</td>
<td> <img src='.$row['thumb'] . '></td>
<td>' . $row['price'] . '</td>
<td>' . $row['mini_descr'] . '</td>
<td>' . $row['b_rooms'] . '</td>
<td>' . $row['status'] . '</td>
</tr>';
}
echo '</table>'; // Close the table
mysqli_free_result ($result); // Free up the resources
} else { // If the query failed to run
// Error message:
echo '<p class="error">The current stays could not be retrieved. We apologize for any inconvenience.</p>';
// Debugging message:
echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
} // End of if ($result).
?>
</div>
</div>
<?php require_once("includes/footer.php")?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Switch</title>
</head>
<body>
	<?php
		$num = 5;
		Switch ($num){
			Case 1:
				echo "The hospital is Moi Teaching and referral";
				break;
			Case 2:
				echo "The hospital is Kenyatta Hospital";
				break;
			Case 3:
				echo "The hospital is Siloam Hospital";
				break;
			Case 4:
				echo "The hospital is Bishop Kioko Hospital";
				break;
			Case 5:
				echo "The hospital is St Joseph's Hospital";
				break;
			default:
				echo "The hospital is default";
				break;
		}
	?>
</body>
</html>
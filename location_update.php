<?php
include "db_connect.php";

$id = $_GET['id'];
$location_id = $_POST['location_id'];
$city = $_POST['city'];
$region = $_POST['region'];
$country = $_POST['country'];

$query=mysqli_query ($kon, "UPDATE locations SET location_id='$location_id',city ='$city', region ='$region', country ='$country'
	WHERE location_id='$id'") or die (mysqli_error());
if($query) {
?>
<script language="JavaScript">
document.location='location_tampilan.php'</script>
<?php
}
?>

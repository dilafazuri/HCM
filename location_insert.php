<?php
include "db_connect.php";

$location_id = $_POST['location_id'];
$city = $_POST['city'];
$region = $_POST['region'];
$country = $_POST['country'];

$query = mysqli_query($kon, "INSERT INTO locations SET
location_id='$location_id',city ='$city', region ='$region', country ='$country'") or die (mysqli_error());
if($query) {
?>
<script language="JavaScript">
document.location='location_tampilan.php'</script>
<?php
}
?>

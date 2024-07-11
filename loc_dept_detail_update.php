<?php
include "db_connect.php";

$id = $_GET['id'];
$department_id = $_POST['department_id'];
$location_id = $_POST['location_id'];
$postal_code = $_POST['postal_code'];
$street_address = $_POST['street_address'];
$dept_loc = $_POST['dept_loc'];

$query=mysqli_query ($kon, "UPDATE loc_dept_detail SET department_id='$department_id',location_id ='$location_id', postal_code ='$postal_code', street_address ='$street_address',dept_loc ='$dept_loc' WHERE dept_loc='$id'") or die (mysqli_error());
if($query) {
?>
<script language="JavaScript">
document.location='loc_dept_detail_tampilan.php'</script>
<?php
}
?>

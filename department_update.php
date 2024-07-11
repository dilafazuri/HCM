<?php
include "db_connect.php";

$id = $_GET['id'];
$department_id = $_POST['department_id'];
$department_name = $_POST['department_name'];

$query=mysqli_query ($kon, "UPDATE department SET department_id='$department_id',department_name ='$department_name ' WHERE department_id='$id'") or die (mysqli_error());
if($query) {
?>
<script language="JavaScript">
document.location='department_tampilan.php'</script>
<?php
}
?>

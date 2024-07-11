<?php
include "db_connect.php";

$department_id = $_POST['department_id'];
$department_name = $_POST['department_name'];
$query = mysqli_query($kon, "INSERT INTO department SET
department_id = '$department_id', department_name = '$department_name'") or die (mysqli_error());
if($query) {
?>
<script language="JavaScript">
document.location='department_tampilan.php'</script>
<?php
}
?>

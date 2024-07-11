<?php
include "db_connect.php";

$job_id = $_POST['job_id'];
$job_title = $_POST['job_title'];
$min_salary = $_POST['min_salary'];
$max_salary = $_POST['max_salary'];

$query = mysqli_query($kon, "INSERT INTO jobs SET
	job_id='$job_id',job_title ='$job_title', min_salary ='$min_salary',max_salary ='$max_salary'") or die (mysqli_error());
if($query) {
?>
<script language="JavaScript">
document.location='job_tampilan.php'</script>
<?php
}
?>

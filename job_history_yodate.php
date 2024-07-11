<?php
include "db_connect.php";

$id = $_GET['id'];
$job_id = $_POST['job_id'];
$employee_id = $_POST['employee_id'];
$department_id = $_POST['department_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_data'];
$hire_date = $_POST['hire_date'];
$all_employees_id = $_POST['all_employees_id'];

$query=mysqli_query ($kon, "UPDATE job_history SET job_id='$job_id', employee_id ='$employee_id', department_id ='$department_id', start_date ='$start_date',end_date ='$end_date',hire_date ='$hire_date',all_employees_id ='$all_employees_id'
	WHERE all_employees_id='$id'") or die (mysqli_error());
if($query) {
?>
<script language="JavaScript">
document.location='job_history_tampilan.php'</script>
<?php
}
?>

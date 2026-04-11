<?php
	$conn = mysqli_connect("localhost","root","","liforin_pharmaceutical_db");
	if(empty($conn)){
		?>
		<script type="text/javascript" language="JavaScript">
				alert("Failed.....");
		</script>
	<?php
	}
	date_default_timezone_set('Asia/Kolkata');
?>

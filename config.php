<?php
	$conn = mysqli_connect("localhost","root","","c-linktechnology_db");
	if(empty($conn)){
		?>
		<script type="text/javascript" language="JavaScript">
				alert("Failed.....");
		</script>
	<?php
	}
	date_default_timezone_set('Asia/Kolkata');
?>

<?php
	if(isset($_SESSION['id_member'])) {

	}

	else {
		echo "<script>alert('silahkan login dahulu');</script>";
		header("location: ../index.php");
	}
?>
<?php
	session_start();

	if(isset($_SESSION['id_member'])) {
		unset($_SESSION['id_member']);
	


?>

<script type="text/javascript">
	document.location = '../index.php';
</script>

<?php
}
else {
?>

<script type="text/javascript">
	alert('login terlebih dahulu');
	document.location = '../index.php';
</script>

<?php

}

?>

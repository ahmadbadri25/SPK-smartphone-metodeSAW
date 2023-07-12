<?php
include "koneksi.php";
$id_sub = $_GET['id_sub'];
$query = mysqli_query($conn, "DELETE FROM subkriteria WHERE id_sub = '$id_sub'") or die(mysqli_error($conn));
if ($query) {
	?>
	<script type="text/javascript">
		alert("Berhasil delete!");
		document.location='subkriteria.php';
	</script>
<?php
}
?>
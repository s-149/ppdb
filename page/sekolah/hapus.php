<?php

	$koneksi->query("delete from sekolah where NSS='$_GET[id]'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=sekolah";
</script>
<?php

	$koneksi->query("delete from kepala_sekolah where Nik_Pengajar='$_GET[id]'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=kepala_sekolah";
</script>
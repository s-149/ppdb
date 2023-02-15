<?php

	$koneksi->query("delete from asal_mula_siswa where Nik_Siswa='$_GET[id]'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=asal_mula_siswa";
</script>
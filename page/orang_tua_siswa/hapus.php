<?php

	$koneksi->query("delete from orang_tua_siswa where Nik_Siswa='$_GET[id]'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=orang_tua_siswa";
</script>
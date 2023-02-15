<?php

	$koneksi->query("delete from pengajar where Nik_Pengajar='$_GET[id]'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=pengajar";
</script>
<?php

	$ambil = $koneksi->query("select * from logo where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['Fhoto'];

	if (file_exists("gambar/logo/$foto")) {
		unlink("gambar/logo/$foto");
	}

	$koneksi->query("delete from logo where id='$_GET[id]'");



?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=logo";
</script>
<?php

	$ambil = $koneksi->query("select * from baner where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['Fhoto'];

	if (file_exists("gambar/baner/$foto")) {
		unlink("gambar/baner/$foto");
	}

	$koneksi->query("delete from baner where id='$_GET[id]'");



?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=baner";
</script>
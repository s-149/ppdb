<?php

	$ambil = $koneksi->query("select * from galeri where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['Fhoto'];

	if (file_exists("gambar/galeri/$foto")) {
		unlink("gambar/galeri/$foto");
	}

	$koneksi->query("delete from galeri where id='$_GET[id]'");



?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=galeri";
</script>
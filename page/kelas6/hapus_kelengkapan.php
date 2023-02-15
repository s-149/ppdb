<?php

	$ambil = $koneksi->query("select * from kelengkapan_data where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['Fhoto'];

	if (file_exists("gambar/kelengkapan_data/$foto")) {
		unlink("gambar/kelengkapan_data/$foto");
	}

	$koneksi->query("delete from kelengkapan_data where id='$_GET[id]'");


?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=kelas6";
</script>
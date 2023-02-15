<?php

	$ambil = $koneksi->query("select * from user where UserName='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto=$data['Fhoto'];

	if (file_exists("gambar/user/$foto")) {
		unlink("gambar/user/$foto");
	}

	$koneksi->query("delete from user where UserName='$_GET[id]'");



?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=user";
</script>
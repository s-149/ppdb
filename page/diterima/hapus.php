<?php

// data siswa
	$koneksi->query("delete from siswa where Nik_Siswa='$_GET[id]'");

// data asal_mula_siswa
	$koneksi->query("delete from asal_mula_siswa where Nik_Siswa='$_GET[id]'");

// data orang_tua_siswa
	$koneksi->query("delete from orang_tua_siswa where Nik_Siswa='$_GET[id]'");

// data kelengkapan_data
	$koneksi->query("delete from kelengkapan_data where Nik_Siswa='$_GET[id]'");

// data user
	$koneksi->query("delete from user where UserName='$_GET[id]'");
?>


<script type="text/javascript">
	alert ("Data Berhasil Dihapus");
    window.location.href="?page=diterima";
</script>
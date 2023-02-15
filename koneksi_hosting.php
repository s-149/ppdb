<?php

//*******************************************************************//
// Struktur yg harus anda ketahui jika ingin membuat sebuah koneksi:
// 1. tentukan Host
// 2. User dari host anda
// 3. password dari host anda
// 4. nama database dari host anda
// 5. perintahkan sistem agar menyambungkan program dan database yg dipilih.
//*******************************************************************//

//*******************************************************************//
// 1. tentukan Host

$host='sql201.epizy.com';

//*******************************************************************//

//*******************************************************************//
// 2. User dari host anda

$user='epiz_27983728';

//*******************************************************************//

//*******************************************************************//
// 3. password dari host anda

$password='Bi05eN9Tco9PrE';

//*******************************************************************//

//*******************************************************************//
// 4. nama database dari host anda

$database='epiz_27983728_ppdb';

//*******************************************************************//

//*******************************************************************//
// 5. perintahkan sistem agar menyambungkan program dan database yg dipilih.

$koneksi=mysqli_connect($host,$user,$password,$database);

// Buat sebuah Logika Antara Terhubung atau tidak.

// Jika Terbukti telah terhubung maka sebaiknya logika tidak perlu ditampilkan
// agar tidak mengganggu kenyamanan user saat mengakses

	if($koneksi){
   		/*  echo"database terhubung";*/
	}

// jika tidak terhubung maka sebaiknya logika ditampilkan agar sistem atau program dapat diperbaiki.
	else {
    	echo"database terputus";
	}

//*******************************************************************//

//*******************************************************************//

	// Koneksi ajax

	//$connect = new PDO("mysql:host=localhost;dbname=ppdb", "root", "");
	
//*******************************************************************//

?>
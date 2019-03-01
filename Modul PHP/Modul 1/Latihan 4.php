<?php
	$nama = "Adam";
	function tampil_nama(){
		global $nama;
		echo "Nama Saya :".$nama;
	}
	tampil_nama();
?>

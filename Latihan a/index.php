<?php
	include "mhs.php"; //include file/kelas
	//deklarasi variabel lalu input masukan
	$mahas1 = new mhs(2004222, 'Rafi', 'Lk', 'Ilkom', 4);
	$mahas2 = new mhs(0000000, 'Tes', 'Lk', 'Ilkom', 0);
	//tampilkan
	echo "NIM : ". $mahas1->getNIM() ."<br>";
	echo "Nama : ". $mahas1->getNama() ."<br>";
	echo "Jenis Kelamin : ". $mahas1->getJenis_kelamin() ."<br>";
	echo "Prodi : ". $mahas1->getProgram_studi() ."<br>";
	echo "Semester : ". $mahas1->getSemester() ."<br>";
	echo "<br>";
	echo "NIM : ". $mahas2->getNIM() ."<br>";
	echo "Nama : ". $mahas2->getNama() ."<br>";
	echo "Jenis Kelamin : ". $mahas2->getJenis_kelamin() ."<br>";
	echo "Prodi : ". $mahas2->getProgram_studi() ."<br>";
	echo "Semester : ". $mahas2->getSemester() ."<br>";
?>
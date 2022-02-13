<?php
	// include kelas tim
	include "tim.php";

	// deklarasi array
	$mtim = array();
	// input new tim pada dua indeks
	$mtim[0] = new tim("Waifu1", "Anime1", 2002, "Ruminas, Destiny, Sasha, Lynn, Siesta");
	$mtim[1] = new tim("Waifu2", "Anime2", 2002, "Hu Tao, Ganyu, Yae, Miko, Ueno, Marin");

	// tampilkan
	for($x = 0; $x<2; $x++){
		echo "Nama Tim : ". $mtim[$x]->getnamatim() ."<br>";
		echo "Asal : ". $mtim[$x]->getasal() ."<br>";
		echo "Tahun : ". $mtim[$x]->gettahun() ."<br>";
		echo "pemain : ". $mtim[$x]->getpemain() ."<br>";
		echo "<br>";
	}
?>
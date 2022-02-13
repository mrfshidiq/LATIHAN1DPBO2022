<?php
// deklarasi kelas tim
class tim{
	// deklarasi variabel lokal
	private $namatim = "";
	private $asal = "";
	private $tahun = 0;
	private $pemain = "";
	
	// konstruktor
	public function __construct($namatim = "", $asal = "",$tahun = 0, $pemain = ""){
		$this->namatim = $namatim;
		$this->asal = $asal;
		$this->tahun = $tahun;
		$this->pemain = $pemain;
	}

	// get dan set setiap variabel
	public function setnamatim($namatim){
		$this->namatim = $namatim;
	}
	public function getnamatim(){
		return $this->namatim;
	}
	public function setasal($asal){
		$this->asal = $asal;
	}
	public function getasal(){
		return $this->asal;
	}
	public function settahun($tahun){
		$this->tahun = $tahun;
	}
	public function gettahun(){
		return $this->tahun;
	}
	public function setpemain($pemain){
		$this->pemain = $pemain;
	}
	public function getpemain(){
		return $this->pemain;
	}
	
}
?>
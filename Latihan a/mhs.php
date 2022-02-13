<?php

// deklarasi kelas mhs
class mhs{
	//variabel lokal
	private $NIM = 0;
	private $Nama = 'x';
	private $Jenis_kelamin = 'x';
	private $Program_studi = 'x';
	private $Semester = 0;
	//konstruktor
	public function __construct($NIM = 0, $Nama = 'x', $Jenis_kelamin = 'x', $Program_studi = 'x', $Semester = 0){
		$this->NIM = $NIM;
		$this->Nama = $Nama;
		$this->Jenis_kelamin = $Jenis_kelamin;
		$this->Program_studi = $Program_studi;
		$this->Semester = $Semester;
	}
	//get dan set setiap variabel
	public function setNIM($NIM){
		$this->NIM = $NIM;
	}
	public function getNIM(){
		return $this->NIM;
	}
	public function setNama($Nama){
		$this->Nama = $Nama;
	}
	public function getNama(){
		return $this->Nama;
	}
	public function setJenis_kelamin($Jenis_kelamin){
		$this->Jenis_kelamin = $Jenis_kelamin;
	}
	public function getJenis_kelamin(){
		return $this->Jenis_kelamin;
	}
	public function setProgram_studi($Program_studi){
		$this->Program_studi = $Program_studi;
	}
	public function getProgram_studi(){
		return $this->Program_studi;
	}
	public function setSemester($Semester){
		$this->Semester = $Semester;
	}
	public function getSemester(){
		return $this->Semester;
	}
}
?>
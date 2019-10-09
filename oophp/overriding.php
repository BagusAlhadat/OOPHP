<?php 

class Produk{
	public $judul = "judul", 
		$penulis = "penulis", 
		$penerbit = "penerbit",
		$harga = 0;

		public function __construct($judul, $penulis, $penerbit, $harga) {

			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
			return $str;
		}
}

class Komik extends Produk {
	public $jmlHalaman = 0;


	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfoProduk() {
		$str = "Komik : ". parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman. ";
		return $str;
	}

}

class Game extends Produk {
	public $waktuMain = 0;

	public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;	

	}

	public function getInfoProduk() {
		$str = "Game : ". parent::getInfoProduk() . "~ {$this->waktuMain} Jam. ";
		return $str;

	}
}

class CetakInfoProduk{
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk -> getLabel()} (Rp. {$produk->harga})";

		return $str;

	}

}

$produk1 = new Komik("Naruto","Masashi Kishimoto", "Albert einstein",200000, 100);

$produk2 = new Game("IT", "Informatika", "Unpas", 2500000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

 ?>
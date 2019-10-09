<?php 

class Produk{
	public $judul = "judul", 
		$penulis = "penulis", 
		$penerbit = "penerbit",
		$harga = 0,
		$jmlHalaman = 0,
		$waktuMain = 0;

		public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain) {

			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktuMain = $waktuMain;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoProduk(){
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
			return $str;
		}
}

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman. ";
		return $str;
	}

}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam. ";
		return $str;

	}
}

class CetakInfoProduk{
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk -> getLabel()} (Rp. {$produk->harga})";

		return $str;

	}

}

$produk1 = new Komik("Naruto","Masashi Kishimoto", "Albert einstein",200000, 100, 0);

$produk2 = new Game("IT", "Informatika", "Unpas", 2500000, 0, 50);
// echo "komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

 ?>
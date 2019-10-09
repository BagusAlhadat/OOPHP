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
}

$produk1 = new Produk("Naruto","Masashi Kishimoto", "Albert einstein",200000);

$produk2 = new Produk("IT", "Informatika", "Unpas", 2500000);
echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
 ?>
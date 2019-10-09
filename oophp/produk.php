<?php 

class Produk{
	public $judul = "judul", 
		$penulis = "penulis", 
		$penerbit = "penerbit",
		$harga = 0;

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Albert einstein";
$produk1->harga = 200000;
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "IT";
$produk2->penulis = "Informatika";
$produk2->penerbit = "Unpas";
$produk2->harga = 2500000;

echo "komik : ". $produk1->getLabel();
echo "<br>";
var_dump($produk2->judul);
 ?>
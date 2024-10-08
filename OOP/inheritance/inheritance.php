<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;


    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }



    public function getlabel()    //method
    {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoProduk()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam";
        return $str;
    }
}


class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

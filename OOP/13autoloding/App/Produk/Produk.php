<?php
abstract class Produk
{
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;



    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        // if (!is_string($judul)) {
        //     throw new Exception("Judul harus STRING");
        // }
        $this->judul = $judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getpenerbit()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getharga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga)
    {
        $this->penerbit = $harga;
    }

    public function diskon()
    {
        return $this->diskon;
    }

    public function setdiskon($diskon)
    {
        $this->diskon = $diskon;
    }



    public function getlabel()    //method
    {
        return "$this->penulis, $this->penerbit";
    }


    abstract public function getInfo();
}

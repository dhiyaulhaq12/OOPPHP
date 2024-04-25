<?php
//Muhammad Dhiya Ulhaq
//22090152
//3C
class Buku  {

    private $judul = "judul",
            $tahun = "tahun",
            $jumlah_halaman = "jumlah_halaman",
            $bahan_material = "bahan_material",
            $diskon = "diskon";
    
    function __construct( $judul, $tahun, $jumlah_halaman, $bahan_material, $diskon ) {
        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->jumlah_halaman = $jumlah_halaman;
        $this->bahan_material = $bahan_material;
        $this->diskon = $diskon;

    }

    function getlable() {
        return "$this->judul, $this->tahun, $this->jumlah_halaman, $this->bahan_material, $this->diskon";    
    }
    function getharga() {
        $usia = data("X") - $this->tahun;
        if ($usia <=5 && $this->jumlah_halaman <= 100) {
            10000;
        } elseif ($usia <=5 && $this->jumlah_halaman > 500) {
            return 50000;
        }
    }

}

    $produk = new $produk ("naruto", 20000, 2015, 100, "kertas");

    echo "buku : " . $produk->getlable();





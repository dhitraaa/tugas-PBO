<?php
namespace App\Math;

class LuasLingkaran {
    public const phi = 3.14;
    private int $jari;

    public function construct($isijari=1){
        $this->jari = $jari;
    }

    public function tampil($nama = "Roda"){
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Lingkaran {$nama} Hasilnya Adalah:{$rumus}";
    }
    public static function testing(){
        echo " Ini dari static";
    }
    public function destruct(){
        echo "udh ah cape";
}
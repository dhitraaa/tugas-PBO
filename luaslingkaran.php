<?PHP

class luaslingkaran {
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban') {
        $rumus = luaslingkaran:: phi* $this->jari * $this->jari;
        echo "lingkaran {$nama} Hasilnya adalah:{$rumus}";
    }
    public static function testing(){
        echo "ini dari static";
    }
}

$lingkaran = new luaslingkaran();
$lingkaran->jari = 16;
$lingkaran->tampil('roda'); //panggil method

luaslingkaran::testing();
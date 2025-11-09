<?PHP

class luaslingkaran {
    public const phi = 3.14;
    protected int $jari;

    public function_construct($isijari=1) {
        $this->jari =$isijari
    }
    public function tampil($nama = 'ban'){
        $rumus = <luaslingkaran::pphi *($this->jari * $this->jari);
        echo "lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing(){
        echo "ini dari static";
    }
    }
    public function_destruct(){
        echo "udah ah cape juga";
    }
}

$lingkaran = new luaslingkaran(16);
//$lingkaran->jari = 16;
$lingkaran->tampil('roda'); //panggil method

luaslingkaran::testing();
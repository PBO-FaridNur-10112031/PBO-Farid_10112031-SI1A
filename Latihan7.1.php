<?php
class produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo(){
        return "produk: $this->nama - Rp ". number_format($this->harga,0,",",".");
    }
}

class produkdigital extends produk {
    public $ukuranFile;

    public function __construct($nama, $harga, $ukuranFile) {
        parent::__construct($nama, $harga);
        $this->ukuranFile = $ukuranFile;
    }

    public function getInfo(){
        return "produkdigital: $this->nama - Rp ". number_format($this->harga,0,",",".")." - size: $this->ukuranFile MB";
    }
}

$p1 = new produk("buku", 50000);
$p2 = new produkdigital("Ebook PJP", 200000, 100);

echo $p1->getInfo();
echo "<br>";
echo $p2->getInfo();
?>
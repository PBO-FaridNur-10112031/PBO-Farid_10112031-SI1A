<?php

class Belanja { // ini adalah class belanja
    
    public string $namaPembeli="Asep";
    public string $namaBarang="Mie";
    public int $hargaBarang=5000;
    public int $jumlahBarang=2;
    public float $totalBayar;
    public float $diskon;
    
    public static float $pajak = 0.02;
    
    public function __construct ($namaPembeli){
        $this->namaPembeli = $namaPembeli;
    }

    public function hitungTotal(): float
    {
        $subtotal = $this->hargaBarang = $this->jumlahBarang;

        return $subtotal;
    }
     public function hargaDiskon(): float
    {
        $subdiskon = $this->hitungTotal() * $this->diskon;
        return $total;
    }
         public function tampilrincian ($namaPembeli): void{
            echo "Nama Pembeli : " . $this->namaPembeli . "<br>";
            echo "Nama Barang : " . $this->namaBarang . "<br>";
            echo "Harga Barang : " . $this->hargaBarang . "<br>";
            echo "Jumlah Barang : " . $this->jumlahBarang . "<br>"
         }
         
         
    }
        

}

$belanja1 = new Belanja(namaPembeli: "Asep");
$belanja1->tampilRincian(namaPembeli: $belanja1->namaPembeli);

?>
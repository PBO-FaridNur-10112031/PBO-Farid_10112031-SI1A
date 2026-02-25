<?php 
function formatRupiah($angka) {
    return "Rp " . number_format( $angka, 0, ', ', '.' );
   }

   class Belanja {
//atribut
    public $namaPembelli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;
//method
    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBeli;

    }
    public function hitungTotalDenganDiskon($persenDiskon){
    $subtotal = $this->hitungSubtotal();
    $diskon = $persenDiskon / 100 * $subtotal;
    return $subtotal - $diskon;
    }
   }
//buat array data pembelian
   $data = [
    'namaPembeli' => 'Farid',
    'namaBarang' => 'Mie Ayam',
    'hargaBarang' => 12000,
    'jumlahBeli' => 12,
   ];
//instansiasi objek belanja dari class Belanja
    $belanja = new Belanja();
    $belanja->namaPembeli = $data["namaPembeli"];
    $belanja->namaBarang = $data["namaBarang"];
    $belanja->hargaBarang = $data["hargaBarang"];
    $belanja->jumlahBeli = $data["jumlahBeli"];

//OUTPUT
    echo "<h2>Struk Belanja Warung</h2>";
    echo "namaPembeli : " . $belanja->namaPembeli . "<br>";
    echo "namaBarang : " . $belanja->namaBarang . "<br>";
    echo "hargaBarang : " . formatRupiah($belanja->hitungSubtotal()) . "<br>";
    echo "Total (Diskon 10%) : " . formatRupiah($belanja->hitungTotalDenganDiskon(10)) . "<br>";
    ?>
   
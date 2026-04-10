<?php

class Employee
{
    public $nama;
    public $gaji;
    public $masaKerja;

    public function __construct($nama, $gaji, $masaKerja)
    {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->masaKerja = $masaKerja;
    }

    public function kenaikanGaji()
    {
        return $this->gaji;
    }

    public function tampilkanInfo()
    {
        return "Nama: $this->nama | Gaji Awal: Rp " . number_format($this->gaji, 0, ',', '.') . " | Masa Kerja: $this->masaKerja tahun";
    }
}

class Programmer extends Employee
{
    public function kenaikanGaji()
    {
        if ($this->masaKerja < 1) {
            return $this->gaji;
        } elseif ($this->masaKerja <= 10) {
            $bonus = $this->gaji * 0.01 * $this->masaKerja;
        } else {
            $bonus = $this->gaji * 0.02 * $this->masaKerja;
        }
        return $this->gaji + $bonus;
    }
}

class Direktur extends Employee
{
    public function kenaikanGaji()
    {
        $bonus = $this->gaji * 0.005 * $this->masaKerja;
        $tunjangan = $this->gaji * 0.001 * $this->masaKerja;
        return $this->gaji + $bonus + $tunjangan;
    }
}

class PegawaiMingguan extends Employee
{
    public $hargaBarang;
    public $stokWajibTerjual;
    public $jumlahPenjualan;

    public function __construct($nama, $gaji, $masaKerja, $hargaBarang, $stokWajibTerjual, $jumlahPenjualan)
    {
        parent::__construct($nama, $gaji, $masaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stokWajibTerjual = $stokWajibTerjual;
        $this->jumlahPenjualan = $jumlahPenjualan;
    }

    public function kenaikanGaji()
    {
        $persentasePenjualan = ($this->jumlahPenjualan / $this->stokWajibTerjual) * 100;

        if ($persentasePenjualan > 70) {
            $tambahan = $this->hargaBarang * 0.10 * $this->jumlahPenjualan;
        } else {
            $tambahan = $this->hargaBarang * 0.03 * $this->jumlahPenjualan;
        }

        return $this->gaji + $tambahan;
    }

    public function tampilkanInfo()
    {
        return parent::tampilkanInfo() . " | Harga Barang: Rp " . number_format($this->hargaBarang, 0, ',', '.') . " | Stock Wajib Terjual: " . $this->stokWajibTerjual . " | Jumlah Penjualan: " . $this->jumlahPenjualan;
    }
}

$karyawan = [
    new Programmer('Farid', 5000000, 5),
    new Programmer('Nizar', 7000000, 12),
    new Direktur('Sukma', 20000000, 8),
    new PegawaiMingguan('Riza', 2200000, 2, 100000, 50, 40),
    new PegawaiMingguan('Ivan', 1800000, 3, 75000, 40, 25),
];

echo "<h2></h2>";
foreach ($karyawan as $pegawai) {
    echo $pegawai->tampilkanInfo() . "<br>";
    echo "Gaji Setelah Kenaikan: Rp " . number_format($pegawai->kenaikanGaji(), 0, ',', '.') . "<br><br>";
}

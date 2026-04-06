<?php

class BangunRuang {
    public $jenis;
    public $sisi = 0;
    public $jari = 0;
    public $tinggi = 0;

    public function __construct($jenis, $sisi = 0, $jari = 0, $tinggi = 0) {
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }

    public function volume(): float {
        switch (strtolower($this->jenis)) {
            case 'bola':
                // 4/3 * π * r^3
                return (4/3) * pi() * pow($this->jari, 3);
            case 'kerucut':
                // 1/3 * π * r^2 * h
                return (1/3) * pi() * pow($this->jari, 2) * $this->tinggi;
            case 'limas segi empat':
                // 1/3 * sisi^2 * tinggi
                return (1/3) * pow($this->sisi, 2) * $this->tinggi;
            case 'kubus':
                // sisi^3
                return pow($this->sisi, 3);
            case 'tabung':
                // π * r^2 * h
                return pi() * pow($this->jari, 2) * $this->tinggi;
            default:
                return 0;
        }
    }
}

// daftar data sesuai contoh di gambar
$data = [
    ['jenis' => 'Bola',             'sisi' => 0,  'jari' => 7,  'tinggi' => 0],
    ['jenis' => 'Kerucut',          'sisi' => 0,  'jari' => 14, 'tinggi' => 10],
    ['jenis' => 'Limas Segi Empat', 'sisi' => 8,  'jari' => 0,  'tinggi' => 24],
    ['jenis' => 'Kubus',            'sisi' => 30, 'jari' => 0,  'tinggi' => 0],
    ['jenis' => 'Tabung',           'sisi' => 0,  'jari' => 7,  'tinggi' => 10],
];

// tabel HTML
echo "<table border=1 cellpadding=6 cellspacing=0>";
echo "<tr style='background:blue;color:white;'>";
echo "<th>Jenis Bangun Ruang</th><th>Sisi</th><th>Jari-jari</th><th>Tinggi</th><th>Volume</th>";
echo "</tr>";

foreach ($data as $item) {
    $br = new BangunRuang($item['jenis'], $item['sisi'], $item['jari'], $item['tinggi']);
    $vol = $br->volume();

    echo "<tr>";
    echo "<td>{$br->jenis}</td>";
    echo "<td>{$br->sisi}</td>";
    echo "<td>{$br->jari}</td>";
    echo "<td>{$br->tinggi}</td>";
    echo "<td>" . number_format($vol, 10, '.', '') . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

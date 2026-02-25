<?php

// Membuat array data mahasiswa
$mahasiswa = [
    [
        "nama" => "Farid",
        "kelas" => "SI 1",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 80
    ],
    [
        "nama" => "Sukma",
        "kelas" => "SI 1",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 80
    ],
    [
        "nama" => "Nizar",
        "kelas" => "SI 1",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 80
    ]
];

// Method untuk menentukan kelulusan
function cekKelulusan($nilai) {
    if ($nilai >= 70) {
        return "Lulus Kuis";
    } else {
        return "Tidak Lulus Kuis";
    }
}

// Menampilkan data
foreach ($mahasiswa as $data) {
    echo "Nama : " . $data["nama"] . "<br>";
    echo "Kelas : " . $data["kelas"] . "<br>";
    echo "Mata Kuliah : " . $data["matkul"] . "<br>";
    echo "Nilai : " . $data["nilai"] . "<br>";
    echo cekKelulusan($data["nilai"]) . "<br>";
    echo "<hr>";
}

?>
<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkukl'];
$nilai_uts = $_GET['nuts'];
$nilai_uas = $_GET['nuas'];
$nilai_tugas = $_GET['nita'];

// Total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

$grades;
$predikat;

// Buat Perhitungan IF mencari Grade
if($total_nilai >=85){
    $grades = "A";
}

elseif($total_nilai >= 70){
    $grades = "B";
}

elseif($total_nilai >= 56){
    $grades = "C";
}

elseif($total_nilai >= 36){
    $grades = "D";
}

else{
    $grades = "E";
}

// Buat Perhitungan IF mencari Predikat

switch($grades){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
}

// Output
echo '<br/>Nama : ' .$nama;
echo '<br/>matkul : ' .$matkul;
echo '<br/>Nilai UTS : ' .$nilai_uts;
echo '<br/>Nilai UAS : ' .$nilai_uas;
echo '<br/>Nilai Tugas :' .$nilai_tugas;
echo '<br/>Grade : ' .$grades;
echo '<br/>Predikat : ' .$predikat;

?>
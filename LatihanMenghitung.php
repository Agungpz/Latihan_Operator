<?php
//Menghitung pembelian Produk
$namabarang = "printer";
$kodebarang = "P0001";
$kategori = "Elektronik";
$hargabarang = "80000";
$jumlahbarang = "4";
$status = "Proses";

$total = $hargabarang * $jumlahbarang;

if($hargabarang > 100000){
    $diskon = 50000;
    $total -= $diskon;
}else {
    $diskon = 0;
}

echo "=== Program menghitung pembelian produk ===\n <br/>";
echo "Nama Barang : $namabarang\n <br/>";
echo "Kode Barang : $kodebarang \n <br/>";
echo "Kategori : $kategori\n <br/>";
echo "Harga Barang : Rp. $hargabarang \n <br/>";
echo "Jumlah Barang : $jumlahbarang\n <br/>";
echo "Total : :Rp. $total\n <br/>";
echo "Status : <span style='color: green'> $status</span>\n <br/>";


//Menghitung Nilai Akhir
$NilaiHarian = 100 * 30 / 100;
$NilaiUts = 100 * 30 / 100;
$NilaiUas = 100 * 40 / 100;
$NilaiAkhir = $NilaiHarian + $NilaiUts + $NilaiUas;

echo "<h1/>Agung Prakoso</h1>";
echo "==================================================== <br/>";
echo "Nilai Hariann : $NilaiHarian <br/>";
echo "Nilai UTS : $NilaiUts <br/>";
echo "Nilai UAS : $NilaiUas <br/>";
echo "Nilai Akhir : $NilaiAkhir <br/>";


$NilaiPredikat = $NilaiAkhir;
if($NilaiPredikat >=90 && $NilaiPredikat <=100){
    echo "Predikat : A+";
}
else if($NilaiPredikat >=85 && $NilaiPredikat <=89){
    echo "Predikat : A";
}
else if($NilaiPredikat >=80 && $NilaiPredikat <=84){
    echo "Predikat : B+";
}
else if($NilaiPredikat >=76 && $NilaiPredikat <=79){
    echo "Predikat : B";
}
else if($NilaiPredikat >=60 && $NilaiPredikat <=75){
    echo "Predikat : C";
}
else if($NilaiPredikat >=40 && $NilaiPredikat <=59){
    echo "Predikat : D";
}
else if($NilaiPredikat >=0 && $NilaiPredikat <=39){
    echo "Predikat : E";
}
else if($NilaiPredikat >=0 && $NilaiPredikat <=39){
    echo "Predikat : E";
}else {
    echo "Pilihan tidak tersedia";
}


?>

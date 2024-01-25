<?php

function pengulangansiswa($nosiswa, $kondisiterminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7){
    echo "<h1>=== Pengulangan Siswa Sederhana ===</h1> <br/>";
    for($nosiswa; $nosiswa <= $kondisiterminasi; $nosiswa++){
        if($nosiswa == $kt1 || $nosiswa == $kt2 || $nosiswa == $kt6){
            echo "Peserta didik no absen $nosiswa tidak hadir <br/>";
        }else if($nosiswa == $kt3 || $nosiswa == $kt4){
            echo "Peserta didik no absen $nosiswa terlambat <br/>";
        }else if($nosiswa == $kt5 || $nosiswa == $kt7){
            echo "Peserta didik no absen $nosiswa sakit <br/>";
        }else{
            echo "Peserta didik no absen $nosiswa hadir <br/>";
        }
    }
}
echo pengulangansiswa(1, 15, 2, 3, 6, 8, 9, 10, 13);
echo  "<br/> <br/> <br/> <br/>";


function sewahotel($nama, $nomor, $alamat, $tipeKamar, $harga, $lamaNginap, $diskon, $totalharga, $status){
    echo "<h1>=== Program Reservasi Hotel Sederhana ===</h1> <br/>";
    echo "Nama Pemesan : $nama <br/>";
    echo "Nomor WhatsApp : $nomor <br/>";
    echo "Alamat : $alamat <br/>";
    echo "tipe Kamar : $tipeKamar <br/>";

    if($tipeKamar == "Deluxe"){
        $hargakamar = 200000;
        if($lamaNginap > 4){
            $totalharga = $hargakamar * $lamaNginap * 0.5;
            $diskon = "50%";
        }else{
            $totalharga = $hargakamar * $lamaNginap;
            $diskon = "0";
        }
    }elseif($tipeKamar == "Superior"){
        $hargakamar = 400000;
        if($lamaNginap > 4){
            $totalharga = $hargakamar * $lamaNginap * 0.35;
            $diskon = "35%";
        }else{
            $totalharga = $hargakamar * $lamaNginap;
            $diskon = "0";
        }
    }else{
        $hargakamar = 800000;
        if($lamaNginap > 4){
            $totalharga = $hargakamar * $lamaNginap * 0.25;
            $diskon = "25%";
        }else{
            $totalharga = $hargakamar * $lamaNginap;
            $diskon = "0";
        }
    }if ($status == "Waiting") {
        $warna = "yellow";
    } elseif ($status == "Check In") {
        $warna = "green";
    } else if($status == "Checkout"){
        $warna = "Red"; 
    }

    echo "HargaPer Malam : Rp ".number_format($hargakamar). "<br/>";
    echo "Lama Menginap : $lamaNginap hari<br/>";
    echo "Diskon : $diskon <br/>";
    echo "Total Harga : Rp ".number_format($totalharga)." <br/>";
    echo "Status : <span style='color: $warna;'>$status</span>";
}

    global $totalharga, $diskon, $hargakamar, $harga;
    
    echo  sewahotel("M. Rizqi Fithyarabbni", "0895-3454-23600", "jl. Mangga Besar XIII No. 8", "Deluxe", $hargakamar, 18, $diskon, $totalharga, "Checkout")

?>
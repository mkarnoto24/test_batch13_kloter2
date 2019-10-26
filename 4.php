<?php
function hitungVoucher($voucher,$jml_belanja)
{
    if($voucher == 'DumbWaysAsik')
    {
        echo "Anda Menggunakan Voucher DumbWaysAsik<br>";
        if ($jml_belanja >= 20000) {
            //
            $diskon = 50 * $jml_belanja / 100;

            if ($diskon <= 20000) {
                $jml_byr = $jml_belanja - $diskon;
                echo "Uang yang harus dibayar : " . $jml_byr . "<br>";
                echo "Diskon " . $diskon . "<br>";
                $kembalian = $jml_belanja - $diskon;
                echo "Kembalian : " . $kembalian . "<br>";
            } else if ($diskon > 20000) {
                $diskon = 20000;
                $jml_byr = $jml_belanja - $diskon;
                $kembalian = $jml_belanja - $jml_byr;
                echo "Uang yang harus dibayar : " . $jml_byr."<br>";
                echo "Diskon : " . $diskon."<br>";
                echo "Kembalian :" . $kembalian."<br>";
            }
        } else if ($jml_belanja < 20000) {
            echo "Anda tidak mendapat diskon";
        }
    }
    else if($voucher == 'DumbWaysMantap')
    {
        echo "Anda Menggunakan Voucher DumbWaysMantap<br>";
        if ($jml_belanja >= 50000) {
            //
            $diskon = 30 * $jml_belanja / 100;

            if ($diskon <= 40000) {
                $jml_byr = $jml_belanja - $diskon;
                echo "Uang yang harus dibayar : " . $jml_byr . "<br>";
                echo "Diskon " . $diskon . "<br>";
                $kembalian = $jml_belanja - $jml_byr;
                echo "Kembalian : " . $kembalian . "<br>";
            } else if ($diskon > 40000) {
                $diskon = 40000;
                $jml_byr = $jml_belanja - $diskon;
                $kembalian = $jml_belanja - $jml_byr;
                echo "Uang yang harus dibayar : " . $jml_byr."<br>";
                echo "Diskon : " . $diskon."<br>";
                echo "Kembalian :" . $kembalian."<br>";
            }
        } else if ($jml_belanja < 50000) {
            echo "Anda tidak mendapat diskon";
        }
    }
}
hitungVoucher('DumbWaysAsik', 100000);

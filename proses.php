<?php
    $hasil = "hasil.php";
    $kata = "-";
    
    $nilai = $_GET['nilai'];

    if (empty($nilai)) {
        header( "Location: $hasil?angka=Angka yang diisi tidak boleh kosong&hasil=$kata" );
        echo $hasil;
    }
    else if (!is_numeric($nilai)) {
        header( "Location: $hasil?angka=Maaf hanya bisa diisi angka&hasil=$kata" );
        echo $hasil;
    }
    else {
        switch ($nilai) {
            case $nilai <= 49:
                $kata = "Anda mendapat nilai E<br>Belajar lagi yaa!!";
                header( "Location: $hasil?angka=$nilai&hasil=$kata" );
                echo $hasil;
                break;

            case $nilai <= 64;
                $kata = "Anda mendapat nilai D<br>Belajar oi jangan contekan!!";
                header( "Location: $hasil?angka=$nilai&hasil=$kata" );
                echo $hasil;
                break;

            case $nilai <= 74;
                $kata = "Anda mendapat nilai C<br>lumayan lah<br>tapi masih aja jelek";
                header( "Location: $hasil?angka=$nilai&hasil=$kata" );
                echo $hasil;
                break;

            case $nilai <= 84;
                $kata = "Anda mendapat nilai B<br>lumayan pintar kau!!";
                header( "Location: $hasil?angka=$nilai&hasil=$kata" );
                echo $hasil;
                break;

            case $nilai <= 100;
                $kata = "Anda mendapat nilai A<br>wow pintar kali kau!!";
                header( "Location: $hasil?angka=$nilai&hasil=$kata" );
                echo $hasil;
                break;

            default:
                $kata = "Angka yang dimasukkan salah!!";
                header( "Location: $hasil?angka=$nilai&hasil=$kata" );
                echo $hasil;
                break;
        }
    }
?>
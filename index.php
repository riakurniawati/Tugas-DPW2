<?php

echo "Animal <br>";
echo "<hr>";

class Kucing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Kucing = new Kucing;
$Kucing->nama = "Mitty";
$Kucing->jumlah_kaki= "4";
$Kucing->bisa_terbang = "tidak";
$Kucing->suara = "Meooong";

echo "Kucing <br>";
echo "Nama : $Kucing->nama <br>";
echo "Punya Kaki Sebanyak : $Kucing->jumlah_kaki <br>";
echo "Bisa Terbang : $Kucing->bisa_terbang <br>";
echo "Suara : $Kucing->suara <br>";
echo "<hr>";


class Bebek{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Bebek = new Bebek;
$Bebek->nama = "Dodo";
$Bebek->jumlah_kaki="2";
$Bebek->bisa_terbang = "tidak";
$Bebek->suara = "kwek kwek kwek";

echo "Bebek <br>";
echo "Nama : $Bebek->nama <br>";
echo "Punya Kaki Sebanyak : $Bebek->jumlah_kaki <br>";
echo "Bisa Terbang : $Bebek->bisa_terbang <br>";
echo "Suara : $Bebek->suara <br>";
echo "<hr>";

class Sapi{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Sapi = new Sapi;
$Sapi->nama = "Bobo";
$Sapi->jumlah_kaki="4";
$Sapi->bisa_terbang = "tidak";
$Sapi->suara = "Mooooo";

echo "Sapi <br>";
echo "Nama : $Sapi->nama <br>";
echo "Punya Kaki Sebanyak : $Sapi->jumlah_kaki <br>";
echo "Bisa Terbang : $Sapi->bisa_terbang <br>";
echo "Suara : $Sapi->suara <br>";
echo "<hr>";

class Elang{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Elang  = new Elang;
$Elang->nama = "Bobo";
$Elang->jumlah_kaki="2";
$Elang->bisa_terbang = "Ya";
$Elang->suara = "Miiip";

echo "Elang <br>";
echo "Nama : $Elang->nama <br>";
echo "Punya Kaki Sebanyak : $Elang->jumlah_kaki <br>";
echo "Bisa Terbang : $Elang->bisa_terbang <br>";
echo "Suara : $Elang->suara <br>";
echo "<hr>";
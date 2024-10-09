<?php

// define('NAMA', 'Rizki');

// echo NAMA;

// echo "<br>";

// const UMUR = 20;

// echo UMUR;


// class Coba
// {
//     const NAMA = "Pratama";
// }


// echo Coba::NAMA;


echo __LINE__;  //baris dimana constan di tulis
echo __FILE__;  //letak file dimana
echo __DIR__;   //di direktori mana


function coba()
{
    echo __FUNCTION__;
}

echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

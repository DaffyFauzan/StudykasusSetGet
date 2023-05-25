<?php

// Tugas Pak istaqiem

class handphone
{
    public $nama,$merek;
    private $ram,$camera;
    
    public function __construct($nama, $merek, $ram, $camera)
    {
        $this-> nama = $nama;
        $this-> merek = $merek;
        $this-> ram = $ram;
        $this-> camera = $camera;
        $this-> Cetak();
    }

    public function Cetak()
    {
        echo "Nama : " . $this->nama;
        echo "<br>";
        echo "merek : " . $this->merek;
        echo "<br>";
        echo "ram : " . $this->ram;
        echo "<br>";
        echo "camera : " . $this->camera;
    }

}

$hp1 = new handphone("Realme C1","Realme","4GB","15MP");


?>
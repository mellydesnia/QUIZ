<?php

class M_Welcome extends CI_Model
{
    public function get()
    {
        return "Pemrograman4 belajar CI";
        $data=10;
    }
    public function luas($panjang, $lebar)
    {
        return $panjang*$lebar;
    }
    
}


?>
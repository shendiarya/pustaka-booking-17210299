<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {

	
	public function index()
	{
        echo "<h1>Perkenalkan </h1>";
        echo "Nama saya SHENDI ARYA EPENDI, 
        Saya tinggal di daerah Serpong, 
        Hobi yang saya sukai Berenang";
	}

    public function profile()
	{
        echo "<h1>Perkenalkan </h1>";
        echo "Nama : SHENDI ARYA EPENDI" ;
        echo "<p> Kelas : 17.6A.27 <p>";
        echo "<p> Program Studi : Teknik Informasi <p>";
        echo "<p> Semester : 6 <p>";
        echo "<p> Alamat : Citra Prima Serpong, Muncul, Tangerang Selatan, Banten <p>"; 
	}
}

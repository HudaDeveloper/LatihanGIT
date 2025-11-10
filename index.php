<?php
class Manusia{

   public $nama;
   public $umur;

   public function biodatamanusia() {
       echo "Halo Selamat Datang $this->nama";
       echo "Umur Kamu Adalah : $this->umur";
   } 

   public function isibiodatamanusia() {
       $this->nama = readline("Masukkan Nama Mu : ");
       $this->umur = readline("Masukkan Umur Mu : ");
   }

   public function __destruct() {
       echo "Objek Manusia dengan nama $this->nama dan $this->umur telah di destroy.\n";
   }
}
?>
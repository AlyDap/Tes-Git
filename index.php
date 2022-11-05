<?php
//ganti router pada App\Config\Routes\line number 38
namespace App\Controllers;
use CodeIgniter\ControLLer;
class hello extends ControLLer{
    //pada extends di atas bisa pake BaseControLLer tanpa harus use CodeIgniter\COntroLLer;
    public function index(){

        $data['title']="Hello World";
        $data['isi']="Kenalin saya Ali dari 3P52";
        echo view('hello_view',$data);   //bisa pake echo view atau return view
        
    }
}

?>
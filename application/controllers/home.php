<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function index(){
    $this ->header();
    $this->load->view('index');
    $this ->footer();
  }
  public function halamanawal(){
    echo "halaman awal";
  }
  public function halamancontact($value=''){
    echo "halaman contact";
  }
  public function nama($value ='', $value1){
    echo "Nama saya " .$value. "Nama panggil saya " .$value1;
  }
  //******* views *********
  public function header(){
    $this->load->view('header');
  }
  public function footer(){
    $this->load->view('footer');
  }
}
 ?>

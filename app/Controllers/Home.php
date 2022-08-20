<?php
namespace App\Controllers;
class Home extends CustomBase
{
  public function __construct(){
    parent::__construct();
    $this->data['menu_active'] = "Home";
  }    
  public function index(){
    $this->data["site_title"] = getenv("site.title") . " - Home";
    return view('login/index',$this->data);
  }
}

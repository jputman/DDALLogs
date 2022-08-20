<?php
namespace App\Controllers;
class Admin extends CustomBase
{
  public function __construct(){
    parent::__construct();
    $this->data['menu_active'] = "Admin";
  }    
  public function index(){
    $this->data["site_title"] = getenv("site.title") . " - Administration";
    return view('admin/index',$this->data);
  }
}

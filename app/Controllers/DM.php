<?php
namespace App\Controllers;
class DM extends CustomBase
{
  public function __construct(){
    parent::__construct();
    $this->data['menu_active'] = "DM";
  }    
  public function index(){
    $this->data["site_title"] = getenv("site.title") . " - DM Logs";
    return view('dm/index',$this->data);
  }
}

<?php
namespace App\Controllers;
class Account extends CustomBase
{
  public function __construct(){
    parent::__construct();
    $this->data['menu_active'] = "Account";
  }    
  public function index(){
    $this->data["site_title"] = getenv("site.title") . " - Account Details";
    return view('account/index',$this->data);
  }
}

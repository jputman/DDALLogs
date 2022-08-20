<?php
namespace App\Controllers;
class Characters extends CustomBase
{
  public function __construct(){
    parent::__construct();
    $this->data['menu_active'] = "Characters";
  }    
  public function index(){
    $this->data["site_title"] = getenv("site.title") . " - Character Logs";
    return view('characters/index',$this->data);
  }
}

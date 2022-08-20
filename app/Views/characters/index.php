<?=$this->extend("template/template")?>
<?=$this->section("loginstatus")?>
<?php
  if(auth()->user() == null){
    echo view('login/notloggedin');
  }
  else{
    echo view('login/loggedin');
  }
?>
<?=$this->endSection()?>

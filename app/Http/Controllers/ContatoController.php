<?php

namespace app\http\controllers;

class contatocontroller extends controller
{
    public function index(){
      $data['titulo']= "contato";

      return view('contato', $data);
    }
}

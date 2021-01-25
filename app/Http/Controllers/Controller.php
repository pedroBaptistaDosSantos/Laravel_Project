<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
      echo "Tudo funcionando corretamente";
    }
    public function cadastrar()
    {
      echo "Tela de cadastro";
    }
    public  function fazerLogin()
    {
      echo "Tela de login";
    }
}

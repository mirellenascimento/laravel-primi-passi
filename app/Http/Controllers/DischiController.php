<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DischiController extends Controller
{

    public function index(){
      require_once __DIR__ . '/../../../public/json/dischi.php';
      $dischi = $dischi_raw;
      return view('dischi', compact('dischi'));
    }
}

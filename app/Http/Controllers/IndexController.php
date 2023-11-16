<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function show(){
       $infos = info::all();
       json_encode($infos);
       return view('info', compact('infos'));

   }

   public function DontBeAfraidJohn(){
       return 'BOOM';
   }

   public function store(){
       return 'this is store';
   }
}

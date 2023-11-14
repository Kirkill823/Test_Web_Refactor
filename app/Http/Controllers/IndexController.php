<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function about(){
       echo 'this is about';
       $info = Info::find(1);
       dd($info);
   }
   public function DontBeAfraidJohn(){
       return 'BOOM';
   }
   public function store(){
       return 'this is store';
   }
}

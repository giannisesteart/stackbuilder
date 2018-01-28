<?php
namespace App\Http\Controllers;

use App\Nini;

class TestController extends Controller
{
    public function show($id)
    {
        $n = new Nini;
        $nini = $n->search($id);
      
        return view('test', array('nini' => $nini));
    }
    
}
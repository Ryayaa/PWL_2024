<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
public function hello() {
 return 'Hello World';
}
// public function greeting(){
//     return view('blog.hello', ['name' => 'Arrya']);
//     }
public function greeting(){
    return view('blog.hello')
    ->with('name','Arrya')
    ->with('occupation','Astronaut');
    }
   
}


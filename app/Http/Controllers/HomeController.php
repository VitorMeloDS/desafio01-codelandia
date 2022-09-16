<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $posts = (object) [
      'var1' => (object) [
        'data' => '16/09/2022',
        'titulo' => 'testando',
        'texto' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti labore omnis facere molestiae asperiores corrupti, quasi magni, sit et laborum, dignissimos reiciendis ad atque libero iste sint error ex. Molestias.'
      ],
      'var2' => (object) [
        'data'   => '17/09/2022',
        'titulo' => 'testando2',
        'texto'  => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti labore omnis facere molestiae asperiores corrupti, quasi magni, sit et laborum, dignissimos reiciendis ad atque libero iste sint error ex. Molestias.'
      ],
      'var3' => (object) [
        'data'   => '18/09/2022',
        'titulo' => 'testando3',
        'texto'  => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti labore omnis facere molestiae asperiores corrupti, quasi magni, sit et laborum, dignissimos reiciendis ad atque libero iste sint error ex. Molestias.'
      ],
    ];

    return view('welcome', ['posts' => $posts]);
  }
}
